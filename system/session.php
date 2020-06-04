<?php
session_start();
/*if (empty($_SESSION['email']) && empty($_SESSION['nome'])) {
    header("location:../index.php");
}*/
if (empty($_SESSION['email'])) {
    header("location:../index.php");
}
?>

