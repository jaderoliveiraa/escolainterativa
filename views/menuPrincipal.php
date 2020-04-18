<!DOCTYPE html>
<?php
require_once '../controllers/connect.php';


?>
<html>
<head>
    <script src="../system/js/bootstrap.js" type="text/javascript"></script>
    <link href="../system/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    

    <meta charset="UTF-8">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">
            <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
        </a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="inicial.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../views/cadUsuarios.php">Usuários <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../views/cadAlunos.php">Alunos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="cadDisciplinas.php">Disciplinas <span class="sr-only">(current)</span></a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cadNotas.php">Notas <span class="sr-only">(current)</span></a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../views/faleConosco.php">Fale conosco</a>
                </li>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-dark my-2 my-sm-0" type="submit"><a href="../system/sair.php">Sair</a></button>
                </form>
            </ul>


        </div>
    </nav>
</body>
</html>
