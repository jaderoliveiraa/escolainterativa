<?php
require '../controllers/connect.php';
require '../views/menuPrincipal.php';
session_start();
if (empty($_SESSION['email'])) {
    header("location:../index.php");
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
