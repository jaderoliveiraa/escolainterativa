<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="../system/js/bootstrap.js" type="text/javascript"></script>
        <link href="../system/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">
                <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicial.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastro
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button"><a class="nav-link" href="../views/cadUsuarios.php">Usuários</a></button>
                                <button class="dropdown-item" type="button"><a class="nav-link" href="../views/cadAlunos.php">Alunos</a></button>
                                <button class="dropdown-item" type="button"><a class="nav-link" href="#">Professores</a></button>
                                <button class="dropdown-item" type="button"><a class="nav-link" href="#">Disciplinas</a></button>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatórios</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-dark my-2 my-sm-0" type="submit"><a href="../system/sair.php">Sair</a></button>
                </form>
            </div>
        </nav>
    </body>
</html>
