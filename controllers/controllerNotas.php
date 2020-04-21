<?php
require_once 'connect.php';
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$periodo = $_POST['periodo'];
$id_disciplina = $_POST['id_disciplina'];
$id_aluno = $_POST['id_aluno'];

//$sql = "INSERT INTO notas SET valor = '$valor' , tipo = '$tipo', periodo = '$periodo', id_disciplina = '$id_disciplina', id_aluno = '$id_aluno'";
$sql = "INSERT INTO notas (valor, tipo, periodo, id_disciplina, id_aluno) VALUES(:valor, :tipo, :periodo, :id_disciplina, :id_aluno)";
/* @var $pdo type */
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':tipo', $tipo);
$stmt->bindParam(':periodo', $periodo);
$stmt->bindParam(':id_disciplina', $id_disciplina);
$stmt->bindParam(':id_aluno', $id_aluno);

if ($stmt->execute()) {
    echo "<script> alert('Nota Inserida com Sucesso!'); window.location.href = '../views/cadNotas.php';</script>";
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
/*if($pdo->query($sql)){
    
    echo "<script> alert('Nota Inserida com Sucesso!'); window.location.href = '../views/cadNotas.php';</script>";
    //header("location:../formularios/formcadastro.php");
    
    
}else{
    echo "Não se pode inserir campos vazios!";
    echo "<script> alert('Dsiciplina não Inserida verifique e tende novamente!');</script>";
}*/
