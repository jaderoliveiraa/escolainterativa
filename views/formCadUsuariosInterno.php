<!DOCTYPE html>
<?php 

?>
<head>

</head>
<body>

    <div class="form-group col-md-11" id="segundoForm">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Cadastrar Responsável</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        
                                        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Responsável</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../controllers/controllerUsuariosFormInt.php" method="POST">
                                            <!-- Formulário campos obrigatorios --> 
                                            <div class="form-group">
                                                <div class="col-md-11 control-label">
                                                    <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Nome <h11>*</h11></label>
                                                <input type="text" name="nome" class="form-control" id="recipient-name" placeholder="Insira o nome aqui" required="">
                                            </div>
                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Telefone <h11>*</h11></label>
                                                <input type="text" name="telefone" class="form-control" id="recipient-name" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                       OnKeyPress="formatar('## #####-####', this)">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">E-mail <h11>*</h11></label>
                                                <input type="text" name="email"  class="form-control" id="recipient-name"  placeholder="email@dominio.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name"  class="col-form-label">Senha<h11>*</h11></label>
                                                <input type="password"  name="senha" class="form-control" id="recipient-name" placeholder="*********">
                                            </div>

                                            <!-- select input -->

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="prependedtext">Situação<h11>*</h11></label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <div class="form-check">
                                                            <input name="situacao" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Ativo
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-check">
                                                            <input  name="situacao" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="0">
                                                            <label  class="form-check-label" for="exampleRadios2">
                                                                Inativo
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button class="btn btn-primary" type="submit"> Cadastrar</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</body>
</html>
