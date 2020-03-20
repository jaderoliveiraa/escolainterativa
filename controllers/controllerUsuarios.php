<?php
require 'connect.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_login SET nome = '$nome' , email = '$email', senha ='$senha'";
$sql = $pdo->query($sql);
if(isset($_POST['nome'] )>0){
    echo "Usuário Inserido com Sucesso!";
    
    header("location:usuarios.php");
    sleep(2);
}else{
    echo "Não se pode inserir campos vazios!";
    sleep(2);
    header("location:usuarios.php");
}

?>
