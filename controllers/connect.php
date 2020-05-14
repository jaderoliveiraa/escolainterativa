<?php 
global $pdo;
session_start();
try{
    $pdo = new PDO("mysql:host=localhost;dbname=escola","root", "");
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
