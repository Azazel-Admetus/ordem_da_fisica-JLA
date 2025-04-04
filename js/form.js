// document.getElementById("matutino").addEventListener("click", () => {
//     console.log("matutino clicado");
//     document.getElementById("turma_matutino").style.display = "block";
//     document.getElementById("turma_vespertino").style.display = "none";
// });

// document.getElementById("vespertino").addEventListener("click", () => {
//     console.log("vespertino clicado");
//     document.getElementById("turma_vespertino").style.display = "block";
//     document.getElementById("turma_matutino").style.display = "none";
// });
document.getElementById('matutino').addEventListener('click', function(){
    document.getElementById('turma_matutino').classList.add('active');
    document.getElementById('turma_vespertino').classList.add('active');
});