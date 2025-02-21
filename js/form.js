document.getElementById("matutino").addEventListener("click", () => {
    document.getElementById("turma_matutino").style.display = "block";
    document.getElementById("turma_vespertino").style.display = "none";
});

document.getElementById("vespertino").addEventListener("click", () => {
    document.getElementById("turma_vespertino").style.display = "block";
    document.getElementById("turma_matutino").style.display = "none";
});