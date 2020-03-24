<?php
session_start();
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

    <form class="form-horizontal" action="../controllers/controllerUsuarios.php" method="POST">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Usuários</div>



                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-11 control-label">
                            <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                        </div>
                    </div>
                </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                        <div class="col-md-7">
                            <input id="Nome" name="nome" placeholder="Digite seu nome completo aqui" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input id="prependedtext" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                       OnKeyPress="formatar('## #####-####', this)">
                            </div>
                        </div>
                    </div> 

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">E-mail<h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input class="form-control input-md" type="text" name="email" id="email" placeholder="exemplo@exemplo.com.br"required="" maxlength="30">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Senha<h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                                <input class="form-control input-md" type="password" name="senha" id="email" placeholder="Digite sua senha"required="" maxlength="30"><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                        </div>
                    </div>                    
                    
                </div>
        </fieldset>
                    
    </form>

                </body>
                </html>
