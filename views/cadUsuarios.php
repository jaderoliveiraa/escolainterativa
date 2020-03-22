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

    <div class="container">

        <div class="central">


                </p><br>
                <form action="../controllers/controllerUsuarios.php" method="POST">
                    <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Alunos</div>

                <div class="panel-body">
                    <div class="form-group">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                        <div class="col-md-8">
                            <input class="form-control input-md" type="text" name="nome" placeholder="Digite o nome" required=""><br><br>
                        </div>
                    </div><br>
                    
                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input class="campo" id="tel" type="text" name="telefone" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)">
                        </div>
                    </div>
                </div> 
                    <label>E-mail</label><br>
                    <input class="form-control input-md" type="text" name="email" id="email" placeholder="exemplo@exemplo.com.br"required="" maxlength="30"><br><br>
                    <label>Senha</label><br>
                    <input class="form-control input-md" type="text" name="senha" id="email" placeholder="Digite sua senha"required="" maxlength="30"><br><br>
                    <button class="buttom" type="submit">Salvar</button>
                </form>
                </form>
            </div>
        </div>
    </div>
                        </div>
            </div>
        </div>

</body>
</html>
