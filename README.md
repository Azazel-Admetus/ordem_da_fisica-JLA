# Ordem da Fisica (ODF)

Site institucional da Ordem da Fisica, com frontend em React + Vite e backend simples em PHP para receber inscricoes.

## Stack
- React + Vite
- TailwindCSS
- PHP (endpoint de inscricao)
- MySQL/MariaDB (armazenamento)

## Estrutura
- `src/` - frontend (React)
- `public/` - assets publicos (imagens)
- `php/` - backend PHP

## Como rodar (dev)
```bash
npm install
npm run dev
```
Acesse: `http://localhost:5173`

## Build para Apache
```bash
npm run build
```
Copia recomendada:
```bash
sudo mkdir -p /var/www/ordem
sudo cp -r dist/* /var/www/ordem/
sudo cp -r php /var/www/ordem/
```
Se usar VirtualHost local:
- `local.ordemdafisica.club`
- DocumentRoot: `/var/www/ordem`

## Banco de dados
Tabela sugerida:
```sql
CREATE TABLE inscricoes (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(120) NOT NULL,
  email VARCHAR(150) NOT NULL,
  telefone VARCHAR(30) NOT NULL,
  formacao VARCHAR(150) NULL,
  mensagem TEXT NULL,
  status ENUM('pendente','aprovado','recusado') NOT NULL DEFAULT 'pendente',
  ip VARCHAR(45) NULL,
  user_agent VARCHAR(512) NULL,
  criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

## Backend (PHP)
- Endpoint: `php/ingresso.php`
- Conexao: `php/conn.php` (ignorado pelo git)

Exemplo de `conn.php`:
```php
<?php
$host = 'localhost';
$user = 'admin';
$pass = 'senha';
$db = 'ordemdafisica';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$conn = new PDO($dsn, $user, $pass, $options);
```

## Observacoes
- `conn.php` deve ficar fora do git (`.gitignore`).
- Imagens devem estar em `public/img` para aparecer na build.
