<?php
session_start();
if (empty($_SESSION['email']) && empty($_SESSION['nome'])) {
    header("location:../index.php");
}
?>

