<!DOCTYPE html>
<?php
require_once './menuPrincipal.php';
require_once '../controllers/connect.php';
require '../system/session.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div class="row"><br></div>
                <div class="row">
                    <div class="col-3">
                        <a href="relDisciplinas.php"> <div class="card-wrapper " style="width: 15rem;">
                                <img class="card-img-top" src="../img/livros.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h2 class="card-title text-center">Disciplinas</h2>
                                </div>
                            </div></a>
                    </div>
                    <div class="col-3">
                        <a href="#"><div class="card-wrapper" style="width: 15rem;">
                                <img class="card-img-top" src="../img/BOLETIM.png" alt="Imagem de capa do card">
                                <div class="card-body text-center">
                                    <h2 class="card-title">Boletim Online</h2>
                                </div>
                            </div></a>
                    </div>
                    <div class="col-3">
                        <a href="relUsuarios.php"><div class="card-wrapper" style="width: 15rem;">
                                <img class="card-img-top" src="../img/usuarios.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h2 class="card-title text-center">Usuários</h2>
                                </div>
                            </div></a>
                    </div>
                    <div class="col-3 mask flex-center">
                        <a href="relAlunos.php"><div class="card-wrapper" style="width: 15rem;">
                                <img class="card-img-top" src="../img/alunos.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h2 class="card-title text-center " >Alunos</h2>
                                </div>
                            </div></a>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
