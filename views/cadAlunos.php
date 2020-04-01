
<?php
include "menuPrincipal.php";
require_once '../controllers/connect.php';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--<link href="../system/css/form.css" rel="stylesheet" type="text/css"/>
    <link href="../system/css/estiloMenu.css" rel="stylesheet" type="text/css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../system/js/form.js" type="text/javascript"></script>

</head>
<body>

    <form class="container-fluid" action="../controllers/controllerAluno.php" method="POST">
        <!-- Botão para abrir Modal Aluno -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAluno">
            Cadastrar Aluno
        </button>

        <!-- O Modal -->
        <div class="modal $modal-fade-transform: scale(.8)" id="modalAluno">
            <div class="modal-dialog">
                <div class="modal-content ">

                    <!-- Modal Header -->

                    <div class="modal-header bg-primary text-center text-white ">
                        <a class="navbar-brand" href="#">
                            <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
                        </a>
                        <h4 class="modal-title">Cadastro de Alunos</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>

                            <p class="table-sm  text-right">* campos obrigatórios</p>

                            <!-- nome -->
                            <div class="container">
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Nome*</label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                                    </div>
                                </div>

                                <!-- Data de Nascimento -->
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Nasc.*</label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="dtnasc" name="dataNasc" placeholder="DD/MM/AAAA" class="form-control input-sm" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                    </div>
                                </div>

                                <!--sexo caixa de seleção -->
                                <div class="row">
                                    <div class="col">
                                        <label>Sexo*</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="sexo" id="sexo" value="masculino" type="radio" required>
                                            Masculino
                                        </label> 
                                    </div>
                                    <div class="col-md-4">
                                        <label class="radio-inline" for="radios-1">
                                            <input name="sexo" id="sexo" value="feminino" type="radio">
                                            Feminino
                                        </label>
                                    </div>
                                </div>

                                <!-- Telefone  -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tel.*</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                               OnKeyPress="formatar('## #####-####', this)">
                                    </div>
                                </div>
                                <!-- e-mail -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Email*</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                    </div>
                                </div>
                                <!-- Senha -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Senha*</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="prependedtext" name="senha" class="form-control" placeholder="Senha" required="" type="password">
                                    </div>
                                </div>


                                <!--  CEP  -->
                                <div class="row">
                                    <label class="col-md-2" for="CEP">CEP*</label>
                                    <div class="col">
                                        <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                                    </div>
                                </div>
                                <!-- Rua -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="input-group-addon">Rua</span>
                                    </div>
                                    <div class="col">
                                        <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                    </div>
                                </div>
                                <!-- Numero -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="input-group-addon">Nº*</span>
                                    </div>
                                    <div class="col-md-3">
                                        <input id="num" name="num" class="form-control" placeholder="" required=""  type="text">
                                    </div>
                                </div>
                                <!-- Bairro -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="input-group-addon">Bairro</span>

                                    </div>
                                    <div class="col-md-10">
                                        <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                    </div>
                                </div>
                                <!-- Cidade -->
                                <div class="row">
                                    <div class="col-md-2    ">
                                        <label>Cidade</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                                    </div>
                                </div>
                                <!-- Estado -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Estado</label>                                        </div>
                                    <div class="col-md-4">
                                        <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                                    </div>
                                </div>
                                <!-- Serie -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="col-md-2 control-label" for="selectbasic">Serie*</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select required id="serie" name="serie" class="form-control">
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
                                <!-- Status -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Situação</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select required id="situacao" name="situacao" class="form-control">
                                            <option value=""></option>
                                            <option value="1">Ativo</option>
                                            <option value="0">Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Responsáveis -->
                                <div class="form-group" required="">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-md-3 control-label" for="selectbasic">Respons*</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="" title="Selecione um Responsável" name="idUsuarios">

                                                <option></option>
                                                <?php
                                                $sql = "SELECT * FROM usuarios ORDER by nome";
                                                $sql = $pdo->query($sql);
                                                foreach ($sql->fetchAll() as $key) {
                                                    echo "<option name='idUsuarios' value=\""; echo $key["id"]; echo "\">" . $key['id'] . " - " . $key['nome'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>




                            <!-- Modal footer -->
                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>

                            </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <!-- Tabela-->
    <div class="container-fluid">
        <?php
        $rs = $pdo->prepare("SELECT * FROM alunos");
        $rs->execute();
        ?>

        <div class="container-fluid">
            <table class="table table-striped " align="center" >
                <thead class="titulo"><th colspan="6">Lista de Alunos</th></thead>
                <thead class="thead ">
                <th class="">Codigo</th>
                <th class="">Nome</th>
                <th class="">Telefone</th>
                <th class="">E-mail</th>
                <th class="">Serie</th>
                <th class="">Situação</th>
                <th class="">Alterar</th>
                <th class="">Inativar</th>
                <th class="">Ver Detalhes</th>
                </thead>
                <hr>
                <tbody>
                    <?php while ($aluno = $rs->fetch(PDO::FETCH_ASSOC)) { ?>       
                        <tr>
                            <td><?php echo $aluno['id']; ?></td>
                            <td><?php echo $aluno['nome']; ?></td>
                            <td><?php echo $aluno['telefone']; ?></td>
                            <td><?php echo $aluno['email']; ?></td>
                            <td><?php echo $aluno['serie']; ?></td>
                            <td><?php
                                if ($aluno == 1) {
                                    echo "Ativo";
                                } else {
                                    echo 'Inativo';
                                }
                                ?></td>

                            <td><a href="formAltfuncionarios.php?id=<?php echo $aluno['id']; ?>" class="img-circle"><img src="../img/editar.png" alt="Alterar"/><a></td>
                                        <td><a href="javascript:func()" onclick="inativar(<?php echo $aluno['id']; ?>)"><img src="../img/proibido.png" alt="Inativar"/></a></td>
                                        <td><a href="formAltfuncionarios.php?id=<?php echo $aluno['id']; ?>"><img src="../img/lista.png" alt=""/><a></td>

                                                    </tr>  

                                                <?php } ?>

                                                </tbody>
                                                </table><br><br><br>
                                                </div>

                                                </div>

                                                <!-- <div class="container-lg">
                                                    <table class="table table-striped">
                                                        <thead class="table-primary">
                                                            <tr>
                                                                <th scope="col-md-1">#</th>
                                                                <th scope="col-md-6">Nome</th>
                                                                <th scope="col">Handle</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                                <th scope="col">teste</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Larry</td>
                                                                <td>the Bird</td>
                                                                <td>@twitter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> -->



                                                </form>


                                                </body>
                                                </html>
