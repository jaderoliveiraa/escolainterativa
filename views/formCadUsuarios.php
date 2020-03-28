<!DOCTYPE html>
<?php 
include_once '../controllers/connect.php';

?>
<head>
    <script src="../system/js/bootstrap.js" type="text/javascript"></script>
    <link href="../system/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../system/css/formsInternos.css" rel="stylesheet" type="text/css"/>
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

                <!-- select input -->

                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext">Situação<h11>*</h11></label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    __Ativo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="0">
                                <label class="form-check-label" for="exampleRadios2">
                                    __Inativo
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Botões -->
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
