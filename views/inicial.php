<?php
require '../controllers/connect.php';
require '../views/menuPrincipal.php';
require '../system/session.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--<link href="../system/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="../system/css/estiloMenu.css" rel="stylesheet" type="text/css"/>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../system/js/form.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Bem vindo!</title>
    </head>
    <body>
        <div class="container">
            <div class="conteudo" style=" height: 29.05rem;">
                <div class="row"><br></div>
                <div class="row row-inline ola">
                    <b>Olá <?php
                        echo $_SESSION['nome'];
                        ?>, seja bem vindo! Você está logado como Administrador!</b></br>
                </div>
                <div class="row"><br></div>
                <div class="row">
                    <div class="col-3">
                        <a href="cadDisciplinas.php"> <div class="card-wrapper " style="width: 15rem;">
                                <img class="card-img-top" src="../img/livros.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h2 class="card-title text-center">Disciplinas</h2>
                                </div>
                            </div></a>
                    </div>
                    <div class="col-3">
                        <a href="#"><div class="card-wrapper" style="width: 15rem;">
                                <img class="card-img-top" src="../img/report.png" alt="Imagem de capa do card">
                                <div class="card-body text-center">
                                    <h2 class="card-title">Relatórios</h2>
                                </div>
                            </div></a>
                    </div>
                    <div class="col-3">
                        <a href="cadUsuarios.php"><div class="card-wrapper" style="width: 15rem;">
                                <img class="card-img-top" src="../img/usuarios.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h2 class="card-title text-center">Usuários</h2>
                                </div>
                            </div></a>
                    </div>
                    <div class="col-3 mask flex-center">
                        <a href="cadAlunos.php"><div class="card-wrapper" style="width: 15rem;">
                                <img class="card-img-top" src="../img/alunos.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h2 class="card-title text-center " >Alunos</h2>
                                </div>
                            </div></a>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php
        require './rodape.php';
        ?>
    </body>
</html>
