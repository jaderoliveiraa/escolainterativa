<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="conteudo" style=" height: 29.05rem;">
                <div class="row"><br></div>
                <div class="row row-inline ola">
                    <b>Olá <?php
                        echo $_SESSION['email'];
                        ?>, seja bem vindo, você está logado como Responsável!</b></br>
                </div>
                <div class="row"><br></div>
                <div class="row">
                    <div class="col-2">
                        <a href="#"><div class="card" style="width: 10rem;">
                                <img class="card-img-top" src="../img/report.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <H5 class="card-title">Relatórios</H5>
                                </div>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
                        include_once './rodape.php';
        ?>
    </body>
</html>