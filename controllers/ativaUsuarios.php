<?php

// Incluido para pegar a conexão com a base
require_once 'connect.php';

$id = $_GET['id'];
try {

    $stmt = $pdo->prepare("UPDATE usuarios SET situacao = 1 WHERE id = '$id'");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("location:../views/cadUsuarios.php");
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
