
<!------ Include the above in your HEAD tag ---------->
<?php
include "menuPrincipal.php";
include '../controllers/connect.php';
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

    <form class="form-horizontal">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Alunos</div>

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-11 control-label">
                            <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                        <div class="col-md-8">
                            <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nascimento<h11>*</h11></label>  
                        <div class="col-md-2">
                            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                        <!-- Multiple Radios (inline) -->

                        <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
                        <div class="col-md-4"> 
                            <label required="" class="radio-inline" for="radios-0" >
                                <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                Feminino
                            </label> 
                            <label class="radio-inline" for="radios-1">
                                <input name="sexo" id="sexo" value="masculino" type="radio">
                                Masculino
                            </label>
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                       OnKeyPress="formatar('## #####-####', this)">
                            </div>
                        </div>
                    </div> 

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">E-mail <h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Senha <h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-record"></i></span>
                                <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Senha" required="" type="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                            </div>
                        </div>
                    </div>


                    <!-- Search input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                        <div class="col-md-2">
                            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Rua</span>
                                <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Nº <h11>*</h11></span>
                                <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Bairro</span>
                                <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext"></label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Cidade</span>
                                <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                            </div>

                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Estado</span>
                                <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                            </div>

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">

                        <label class="col-md-2 control-label" for="selectbasic">Serie <h11>*</h11></label>

                        <div class="col-md-3">
                            <select required id="escolaridade" name="escolaridade" class="form-control">
                                <option value=""></option>
                                <option value="Primeiro Ano">Primeiro Ano</option>
                                <option value="Segundo Ano">Segundo Ano</option>
                                <option value="Terceiro Ano">Terceiro Ano</option>
                                <option value="Quarto Ano">Quarto Ano</option>
                                <option value="Quinto Ano">Quinto Ano</option>
                                <option value="Sexto Ano">Sexto Ano</option>
                                <option value="Setimo Ano">Setimo Ano</option>
                                <option value="Oitavo Ano">Oitavo Ano</option>
                                <option value="Nono Ano">Nono Ano</option>
                            </select>
                        </div>


                    </div>


                    <div class="form-group" id="segundoForm">
                        
                        <?php
                        include_once './formCadUsuarios.php';
                        ?>
                        
                        <label class="col-md-3 control-label" for="selectbasic">Responsável <h11>*</h11></label>

                    <div class="form-group" required="">
                        <select class="browser-default custom-select-lg col-md-3" title="Selecione um Responsável">
                            
                            <option></option>
                            <?php
                            $sql = "SELECT * FROM usuarios ORDER by nome";
                            $sql = $pdo->query($sql);
                            foreach ($sql->fetchAll() as $key) {
                                echo "<option name='opcao' >" . $key['id'] . " - " . $key['nome'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!--Button (Double) -->

                    <div class = "form-group">
                        <label class = "col-md-2 control-label" for = "Cadastrar"></label>
                        <div class = "col-md-8">
                            <button id = "Cadastrar" name = "Cadastrar" class = "btn btn-success" type = "Submit">Cadastrar</button>
                            <button id = "Cancelar" name = "Cancelar" class = "btn btn-danger" type = "Reset">Cancelar</button>
                        </div>
                    </div>
                </div>

            </div>





        </fieldset>
    </form>

</body>
</html>
