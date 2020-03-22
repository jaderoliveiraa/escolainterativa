<?php
require 'connect.php';
session_start();

try{
    $pdo = new PDO("mysql:host=localhost;dbname=escola","falecom1", "18v0XaXg9k");
    if(isset($_POST['email'])){
        if(empty($_POST['email']) || empty($_POST['senha'])){
            $message = '<label>Por favor preencha todos os dados</label>';
        }else{
            $query = "SELECT * FROM usuarios WHERE email= :email AND senha= :senha ";
            $statement = $pdo->prepare($query);
            $statement->execute(
                    array(
                        'email' => $_POST['email'],
                        'senha' => $_POST['senha']
                    )
                    );
            $count = $statement->rowCount();
            if($count >0){
                $_SESSION['email'] = $_POST['email'];
                header("location:../views/inicial.php");
            }else{
                echo "alert( 'Usuário ou senha incorretos!' );";
                header("location:../views/inicial.php");
            }
        }
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>