<?php
require_once './connect.php';

$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$site = $_POST['site'];
$responsavel = $_POST['responsavel'];

$sql = "UPDATE instituicao SET nome = '$nome', email = '$email',endereco = '$endereco', telefone = '$tel', email = '$email', website = '$site', responsavel = '$responsavel'  WHERE id = 1";
$pdo->query($sql);
if(isset($sql )>0){
    echo "<script> alert('Dados da instituição alterados com Sucesso!'); window.location.href = '../views/configAdmin.php'; </script>";
    
    
}else{
    echo "<script> alert('Verifique todos os dados e tente novamente!'); window.location.href = '../views/configAdmin.php';</script>";
}

