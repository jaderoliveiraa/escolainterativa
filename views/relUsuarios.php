<?php
include "menuPrincipal.php";
require_once '../controllers/connect.php';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.3.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../system/js/form.js" type="text/javascript"></script>
    <script src="../system/js/divs.js" type="text/javascript"></script>
    <script src="../system/js/funcoes.js" type="text/javascript"></script>
    <title>Cadastro de Usuários</title>

</head>
<body>
    <div id="container_geral" class="container-fluid">
        <form class="container-fluid" action="../controllers/controllerUsuarios.php" method="POST">
            <!-- Botão para abrir Modal Usuarios -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick='history.go(-1)'>Voltar</button>
                <a title='Imprimir conteúdo' href='javascript:window.print()' class="text-white">
                    <button type="button" class="btn btn-primary" ><b>Imprimir</b></button>
                </a>
            </div>
            <!-- O Modal -->
            <div class="modal $modal-fade-transform: scale(.8)" id="modalUsuarios">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <!-- Modal Header -->

                        <div class="modal-header bg-primary text-center text-white ">
                            <a class="navbar-brand" href="#">
                                <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
                            </a>
                            <h4 class="modal-title">Cadastro de Usuários</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p class="table-sm  text-right">Todos os campos são obrigatórios</p>

                            <div class="container">
                                <!-- nome -->
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Nome </label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                                    </div>
                                </div>
                                <!-- Sobrenome -->
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Sobrenome </label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="sobrenome" name="sobrenome" placeholder="" class="form-control input-md" required="" type="text">
                                    </div>
                                </div>
                                <!-- Data de Nascimento -->
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Nasc. </label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="dtnasc" name="dataNasc" placeholder="DD/MM/AAAA" class="form-control input-sm" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                    </div>
                                </div>
                                <!--sexo caixa de seleção -->
                                <div class="row">
                                    <div class="col">
                                        <label>Sexo </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="sexo" id="sexo" value="masculino" type="radio">
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
                                        <label>Tel. </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                               OnKeyPress="formatar('## #####-####', this)">
                                    </div>
                                </div>
                                <!-- e-mail -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Email </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                    </div>
                                </div>
                                <!-- Senha -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Senha </label>
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
                                        <button type="button" class="btn btn-success" onclick="pesquisacep(cep.value)">Pesquisar</button>
                                    </div>
                                </div>
                                <!-- Rua -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="input-group-addon">Rua</span>
                                    </div>
                                    <div class="col">
                                        <input id="rua" name="rua" class="form-control" placeholder="" required=""  type="text">
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
                                        <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text">
                                    </div>
                                </div>
                                <!-- Cidade -->
                                <div class="row">
                                    <div class="col-md-2    ">
                                        <label>Cidade</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text">
                                    </div>
                                </div>
                                <!-- Estado -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Estado</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="estado" name="estado" class="form-control" placeholder="" required=""  type="text">
                                    </div>
                                </div>
                                <!-- Situação -->
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
                                <!-- tipo -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tipo</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select required id="tipo" name="tipo" class="form-control">
                                            <option value=""></option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Professor</option>
                                            <option value="3">Responsável</option>
                                            <option value="4">Aluno</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Serie -->
                                <div id="oculto" class="row oculto">
                                    <div class="col-md-2">
                                        <label class="" for="selectbasic">Serie</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select  name="id_serie" class="form-control">
                                            <option></option>
                                            <?php
                                            $sql = "SELECT * FROM serie";
                                            $sql = $pdo->query($sql);
                                            foreach ($sql->fetchAll() as $key) {
                                                echo "<option name='idUsuarios' value=\"";
                                                echo $key["id_serie"];
                                                echo "\">" . $key['id_serie'] . " - " . $key['descricao'] . "</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>

                                </div>
                                <!-- Select Responsáveis -->
                                <div id="oculto2" class="row oculto2">
                                    <div class="col-md-2">
                                        <label class="" for="selectbasic">Responsavel </label>
                                    </div>
                                    <div class="col-md-10">
                                        <select name="responsavel" class="form-control" title="Selecione um Responsável" >

                                            <option></option>
                                            <?php
                                            $sql = "SELECT * FROM usuarios WHERE tipo = 3 ORDER by nome";
                                            $sql = $pdo->query($sql);
                                            foreach ($sql->fetchAll() as $key) {
                                                echo "<option name='idUsuarios' value=''";
                                                echo $key["id"];
                                                echo "\">" . $key['nome'] . " - " . $key['email'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Tabela Usuarios-->
    <div id="tabela" class="container-fluid">
        <?php
        $rs = $pdo->prepare("SELECT * FROM usuarios");
        $rs->execute();
        ?>

        <div class="container-fluid">
            <table class="table  table-hover table-sm" align="center" >
                <thead class="titulo table-warning"><th colspan="10">Lista de Usuários</th></thead>
                <thead class="thead ">
                <th class="">Codigo</th>
                <th class="">Nome</th>
                <th class="">Sobrenome</th>
                <th class="">Telefone</th>
                <th class="">E-mail</th>
                <th class="">Tipo</th>
                <th class="">Situação</th>
                </thead>
                <hr>
                <tbody>
                    <?php while ($usuario = $rs->fetch(PDO::FETCH_ASSOC)) { ?>       
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nome']; ?></td>
                            <td><?php echo $usuario['sobrenome']; ?></td>
                            <td><?php echo $usuario['telefone']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php
                                switch ($usuario['tipo']) {
                                    case 1:
                                        echo 'Administrador';

                                        break;
                                    case 2:
                                        echo 'Professor';

                                        break;
                                    case 3:
                                        echo 'Responsável';

                                        break;
                                    case 4:
                                        echo 'Aluno';

                                        break;

                                    default:
                                        break;
                                }
                                ?></td>
                            <td><?php
                                if ($usuario['situacao'] == 1) {
                                    echo "Ativo";
                                } else {
                                    echo 'Inativo';
                                }
                                ?></td>

                            <td></td>
                                        <td>
                                        </td>
                                        <td>    </td>

                                                    </tr>  

                                                <?php } ?>

                                                </tbody>
                                                </table><br><br><br>
                                                </div>    

                                                <?php
                                                require './rodape.php';
                                                ?>
                                                </body>
                                                </html>
