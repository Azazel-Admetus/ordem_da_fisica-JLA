<?php
header('Content-Type: application/json; charset=UTF-8');
ini_set('display_errors', '0');
require_once 'conn.php';

function get_client_ip() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $parts = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($parts[0]);
    }
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

function rate_limit($ip, $limit = 5, $windowSeconds = 3600) {
    $key = md5($ip);
    $file = sys_get_temp_dir() . "/odf_ingresso_$key.json";
    $now = time();
    $events = [];

    if (file_exists($file)) {
        $raw = file_get_contents($file);
        $events = json_decode($raw, true);
        if (!is_array($events)) {
            $events = [];
        }
    }

    $events = array_filter($events, function ($ts) use ($now, $windowSeconds) {
        return ($now - $ts) <= $windowSeconds;
    });

    if (count($events) >= $limit) {
        return false;
    }

    $events[] = $now;
    file_put_contents($file, json_encode(array_values($events)));
    return true;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Metodo nao permitido.']);
    exit;
}

$contentType = $_SERVER['CONTENT_TYPE'] ?? '';
if (stripos($contentType, 'application/json') === false) {
    http_response_code(415);
    echo json_encode(['ok' => false, 'error' => 'Content-Type invalido.']);
    exit;
}

$ip = get_client_ip();
if (!rate_limit($ip)) {
    http_response_code(429);
    echo json_encode(['ok' => false, 'error' => 'Muitas tentativas. Tente novamente mais tarde.']);
    exit;
}

$raw = file_get_contents('php://input');
if ($raw === false || strlen($raw) > 20000) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Payload invalido.']);
    exit;
}
$data = json_decode($raw, true);

if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'JSON invalido.']);
    exit;
}

$nome = trim($data['nome'] ?? '');
$email = trim($data['email'] ?? '');
$telefone = trim($data['telefone'] ?? '');
$formacao = trim($data['formacao'] ?? '');
$mensagem = trim($data['mensagem'] ?? '');
$website = trim($data['website'] ?? '');

if ($nome === '' || $email === '' || $telefone === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Campos obrigatorios ausentes.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'E-mail invalido.']);
    exit;
}

if ($website !== '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Validacao falhou.']);
    exit;
}

$telefone = preg_replace('/[^0-9+()\\s-]/', '', $telefone);

if (strlen($nome) > 120 || strlen($email) > 150 || strlen($telefone) > 30 || strlen($formacao) > 150 || strlen($mensagem) > 1000) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Campos excederam o limite.']);
    exit;
}

try {
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
    if (strlen($ua) > 512) {
        $ua = substr($ua, 0, 512);
    }
    $stmt = $conn->prepare(
        'INSERT INTO inscricoes (nome, email, telefone, formacao, mensagem, ip, user_agent)
         VALUES (:nome, :email, :telefone, :formacao, :mensagem, :ip, :user_agent)'
    );
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':formacao', $formacao);
    $stmt->bindParam(':mensagem', $mensagem);
    $stmt->bindParam(':ip', $ip);
    $stmt->bindParam(':user_agent', $ua);
    $stmt->execute();

    echo json_encode(['ok' => true]);
} catch (PDOException $e) {
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
    error_log('Erro ao salvar inscricao: ' . $e->getMessage() . " | ip=$ip | ua=$ua");
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Erro ao salvar inscricao.']);
}
