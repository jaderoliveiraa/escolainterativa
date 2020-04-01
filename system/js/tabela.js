
function inativar(id){
    var resposta = confirm("Deseja Inativar Esse Aluno?");
    if(resposta === true){
        alert('Aluno Inativado com Sucesso!');
        window.location.href = "../views/cadAluno.php";
    }
}