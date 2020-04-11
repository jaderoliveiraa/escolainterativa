<?php
require_once 'connect.php';
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$situacao = $_POST['situacao'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO usuarios SET nome = '$nome' , telefone = '$telefone', email ='$email', senha='$senha', situacao='$situacao', tipo='$tipo' ";
if($pdo->query($sql)){
    echo "<script> alert('Usuário Inserido com Sucesso!'); window.location.href = '../views/cadUsuarios.php';</script>";
    //header("location:../formularios/formcadastro.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    header("location:usuarios.php");
}
?>
