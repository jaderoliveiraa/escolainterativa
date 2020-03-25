<html>

    <head>
        <script src="../system/js/bootstrap.js" type="text/javascript"></script>
        <script src="../system/js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <?php
        require 'connect.php';
        require '../system/usuarioClass.php';

        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $usuario = new usuarioClass();

            if ($usuario->login($email, $senha) == true) {
                if (isset($_SESSION['id'])) {
                    echo "<script>alert('Bem vindo ao sistema Escola Interativa!);</script>";
                    header("location:../views/inicial.php");
                } else {
                    echo '<script>alert("Email ou Senha incorretos!");</script>';
                    header("location:../index.php");
                    
                }
            } else {
                echo '<script>alert("Email ou Senha incorretos!");</script>';
                header("location:../index.php");
                
            }
        } else {
            echo '<script>alert("Email ou Senha incorretos!");</script>';
            header("location:../index.php");
            
        }
        ?>

    </body>


</html>
