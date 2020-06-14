<!DOCTYPE html>
<?php
require_once '../system/session.php';
?>
<html>
<head>
    <link href="../system/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="../system/js/bootstrap.js" type="text/javascript"></script>

    <meta charset="UTF-8">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">
            <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
        </a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="inicialAluno.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../views/faleConoscoAluno.php">Fale conosco</a>
                </li>
                
            </ul>


        </div>
        <?php

            function saudacao($nome = '') {
                date_default_timezone_set('America/Sao_Paulo');
                $data = date("d/m/Y");
                $hora = date('H');
                if ($hora >= 6 && $hora <= 12) {
                    echo "Bom dia " . $_SESSION["nome"] . "! Hoje é Dia " . $data . "   ";
                } else if ($hora > 12 && $hora <= 18) {
                    echo "Boa tarde " . $_SESSION["nome"] . "! Hoje é Dia " . $data . "   ";
                } else {
                    echo "Bom noite " . $_SESSION["nome"] . "! Hoje é Dia " . $data . "   ";
                }
            }
            ?>

            <label><?php echo saudacao() ?></label>
            <button class="btn btn-dark btn-md pull-right" type="submit" ><a href="../system/sair.php">   Sair   </a></button>
    </nav>
</body>
</html>
