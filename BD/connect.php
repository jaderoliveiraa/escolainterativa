<?php

session_start();

global $pdo;
try{
    $pdo = new PDO("mysql:host=sql111.4sql.net;dbname=sq_25018769_escola","sq_25018769", "Movel215");
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
