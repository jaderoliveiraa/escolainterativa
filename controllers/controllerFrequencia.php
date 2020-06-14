<?php
include_once './connect.php';

$id_aluno = $_POST['id'];
$id_serie = $_POST['id_serie'];
$disciplinas = $_POST['disciplinas'];
$status = $_POST['status'];
$data = $_POST['data'];

$busca = $pdo->prepare("select * from frequencia where id_aluno = :id");
$busca->bindParam(':id', $id_aluno);
$busca->bindParam(':data', $data);
$busca->execute();
//$resultado = $busca->fetch();
if ($busca->rowcount() > 0 && $data == $busca['data'] ) {
    
    $sql = "UPDATE frequencia SET idusuario = '".$id_aluno."', idserie = '".$id_serie."',iddisciplinas = '".$disciplinas."', status = '".$status."' where id_usuario = ".$id;
    
    $pdo->query($sql);
    echo 'atualizou';
}else{
    
    $sql = "INSERT INTO `frequencia`(`idusuario`, `idserie`, `iddisciplinas`, `status`) VALUES ($id_aluno,$id_serie,$disciplinas,$status)";
    $pdo->query($sql);
    echo'inseriu';
}



?>