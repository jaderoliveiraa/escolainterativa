<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="../system/js/bootstrap.js" type="text/javascript"></script>
        <link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" style="width:40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastro =></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/cadUsuarios.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Professores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disciplinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatórios</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    
                    <button class="btn btn-outline-danger" type="submit"><a href="../system/sair.php">Sair</a></button>
                </form>
            </div>
        </nav>
    </body>
</html>
