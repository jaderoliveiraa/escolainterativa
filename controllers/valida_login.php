<html>

    <head>
        <script src="../system/js/bootstrap.js" type="text/javascript"></script>
        <script src="../system/js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <?php
        global $menu;
        require 'connect.php';
        require '../system/usuarioClass.php';



        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes(md5($_POST['senha']));
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
            $sql->bindValue(":email", $_POST['email']);
            $sql->execute();
            $res = $sql->fetch();

            $usuario = new usuarioClass();


            if ($usuario->login($email, $senha) == true) {
                if ($res['situacao'] != 0) {
                    if (isset($_SESSION['email'])) {
                        switch ($res['tipo']) {
                            case 1:
                                header("location:../views/inicial.php");
                                break;
                            case 2:
                                header("location:../views/inicialProfessor.php");
                                break;
                            case 3:
                                header("location:../views/inicialResponsavel.php");
                                break;
                            case 4:
                                header("location:../views/inicialAluno.php");
                                break;

                            default:
                                break;
                        }
                    } else {
                        echo "<script> alert('Usuário ou senha inválidos!'); window.location.href = '../index.php';</script>";
                    }
                } else {
                    echo "<script> alert('Usuário ou senha inválidos!'); window.location.href = '../index.php';</script>";
                }
            } else {
                echo "<script> alert('Usuário ou senha inválidos!'); window.location.href = '../index.php';</script>";
            }
        } else {
            echo "<script> alert('Usuário não encontrado, entre em contato com o Administrador!'); window.location.href = '../index.php';</script>";
        }
        ?>



    </body>


</html>
