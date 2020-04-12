<?php
require_once 'connect.php';
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$idprofessor = $_POST['id_professor'];
$situacao = $_POST['situacao'];

$sql = "INSERT INTO disciplinas SET nome = '$nome' , descricao = '$descricao', id_professor = '$idprofessor', situacao = '$situacao'";

if($pdo->query($sql)){
    
    echo "<script> alert('Disciplina Cadastrada com Sucesso!'); window.location.href = '../views/cadDisciplinas.php';</script>";
    //header("location:../formularios/formcadastro.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    echo "<script> alert('Dsiciplina não Inserida verifique e tende novamente!');</script>";
}
