<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=falecom1_cli","falecom1", "18v0XaXg9k");
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
