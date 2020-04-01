
<!------ Include the above in your HEAD tag ---------->
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

    <form class="container-fluid" action="../controllers/controllerUsuarios.php" method="POST">
        <!-- Botão para abrir Modal Usuarios -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUsuarios">
            Cadastrar Usuários
        </button>

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
            $rs = $pdo->prepare("SELECT * FROM usuarios");
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
                                <td><?php
                                    if ($aluno ['situacao']== 1) {
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



                                                    </form>


                                                    </body>
                                                    </html>
