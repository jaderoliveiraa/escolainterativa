<?php
require_once 'connect.php';
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$periodo = $_POST['periodo'];
$id_disciplina = $_POST['id_disciplina'];
$id_aluno = $_POST['id_aluno'];

echo $valor ."</br>";
echo $tipo ."</br>";
echo $periodo ."</br>";
echo $id_disciplina ."</br>";
echo $id_aluno ."</br>";

$sql = "INSERT INTO notas SET valor = '$valor' , tipo = '$tipo', periodo = '$periodo', id_disciplina = '$id_disciplina', id_aluno = '$id_aluno'";

if($pdo->query($sql)){
    
    echo "<script> alert('Nota Inserida com Sucesso!'); window.location.href = '../views/cadNotas.php';</script>";
    //header("location:../formularios/formcadastro.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    echo "<script> alert('Dsiciplina não Inserida verifique e tende novamente!');</script>";
}
