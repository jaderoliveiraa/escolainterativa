
<!------ Include the above in your HEAD tag ---------->
<?php
include "menuPrincipal.php";
?>
<!DOCTYPE html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../system/css/form.css" rel="stylesheet" type="text/css"/>
    <link href="../system/css/estiloMenu.css" rel="stylesheet" type="text/css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../system/js/form.js" type="text/javascript"></script>

</head>
<body>

    <form class="form-horizontal" action="../controllers/controllerUsuarios.php">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Usuários</div>

               <!-- <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group"> 

                            <div class="col-md-4 control-label">
                                <img id="logo" src="../img/logo.png"/>
                            </div>

                            <div class="col-md-4 control-label">
                                <h1>Cadastro de Usuários</h1>

                            </div>
                        </div>-->
               <form action="../controllers/controllerUsuarios.php" name="formularioUsuarios" method="post">
                   <input type="text" name="nome" required="" placeholder="Digite seu nome aqui">
                   <input type="text" name="telefone" required="" placeholder="Somente Números">
                   <input type="email" name="email" required="" placeholder="exemplo@dominio.com">
                   <input type="password" name="senha" required="" placeholder="Senha">
                   
                   <input type="submit" name="salvar" value="Salvar">
                        
                    </form>
                


        </fieldset>
    </form>

</body>
</html>
