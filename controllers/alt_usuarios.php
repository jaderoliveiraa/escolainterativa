<?php 
require "connect.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$novonome = $_POST['novonome'];
$novoemail = $_POST['novoemail'];
$novasenha = $_POST['novasenha'];

$sql = "UPDATE tb_login SET nome = '$novonome', email = '$novoemail',senha = '$novasenha' WHERE email = '$email'";
$pdo->query($sql);
if(isset($_POST['nome'] )>0){
    echo "Usuário Inserido com Sucesso!";
    sleep(2);
    header("location:usuarios.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    sleep(2);
    header("location:usuarios.php");
}

?>