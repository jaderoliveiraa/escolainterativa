<?php
require_once 'connect.php';
$nome = $_POST['nome'];
$dataNasc = $_POST['dataNasc'];
$sexo = $_POST['sexo'];
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

/*echo "Nome:......." .$_POST['nome']. "<br>";
echo "dataNasc:..." .$_POST['dataNasc']. "<br>";
echo "Sexo:......." .$_POST['sexo']. "<br>";
echo "Telefone:..." .$_POST['telefone']. "<br>";
echo "Email:......" .$_POST['email']. "<br>";
echo "Senha:......" .$_POST['senha']. "<br>";
echo "CEP:........" .$_POST['cep']. "<br>";
echo "Rua:........" .$_POST['rua']. "<br>";
echo "Numero:....." .$_POST['num']. "<br>";
echo "Bairro:....." .$_POST['bairro']. "<br>";
echo "Cidade:....." .$_POST['cidade']. "<br>";
echo "Estado:....." .$_POST['estado']. "<br>";
echo "Serie:......" .$_POST['serie']. "<br>";
echo "idUsuarios:." .$_POST['idUsuarios']. "<br>";
echo "Situação:..." .$_POST['situacao']. "<br>";*/


$sql = "INSERT INTO alunos SET nome = '$nome' , dataNasc = '$dataNasc',sexo = '$sexo', telefone = '$telefone', email ='$email', senha='$senha', cep = '$cep', rua = '$rua', num = '$num', bairro = '$bairro', cidade = '$cidade', estado = '$estado', serie = '$serie', idUsuarios = '$idUsuarios', situacao = '$situacao'";

if($pdo->query($sql)){
    echo "<script> alert('Aluno Inserido com Sucesso!'); window.location.href = '../views/cadAlunos.php';</script>";
    //header("location:../formularios/formcadastro.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    echo "<script> alert('Aluno não Inserido verifique e tende novamente!');</script>";
}



