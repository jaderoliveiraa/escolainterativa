<?php
require_once 'connect.php';
$nome = $_POST['nome'];
$dataNasc = addslashes($_POST['dataNasc']);
$sexo = addslashes($_POST['sexo']);
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$serie = $_POST['serie'];
$idUsuarios = $_POST['idUsuarios'];
$situacao = $_POST['situacao'];


$sql = "INSERT INTO alunos SET nome = '$nome' , dataNasc = '$dataNasc',sexo = '$sexo', telefone = '$telefone', email ='$email', senha='$senha', cep = '$cep', rua = '$rua', num = '$num', bairro = '$bairro', cidade = '$cidade', estado = '$estado', serie = '$serie', idUsuarios = '$idUsuarios', sutuacao = '$situacao' ";
if($pdo->query($sql)){
    echo "<script> alert('Aluno Inserido com Sucesso!'); </script>";
    //header("location:../formularios/formcadastro.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    echo "<script> alert('Aluno não Inserido verifique e tende novamente!');</script>";
}



