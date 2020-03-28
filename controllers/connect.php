<?php 
session_start();
global $pdo;
try{
    $pdo = new PDO("mysql:host=localhost;dbname=escola","root", "");
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
