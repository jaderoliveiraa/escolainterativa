
<!------ Include the above in your HEAD tag ---------->
<?php
require "menuPrincipal.php";
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

    <form class="container-fluid" action="../controllers/controllerDisciplinas.php" method="POST">
        <!-- Botão para abrir Modal Usuarios -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick='history.go(-1)'>Voltar</button>
            <a title='Imprimir conteúdo' href='javascript:window.print()' class="text-white">
                <button type="button" class="btn btn-primary" ><b>Imprimir</b></button>
            </a>
        </div>

        <!-- O Modal -->
        <div class="modal $modal-fade-transform: scale(.8) " id="modalDisciplinas">
            <div class="modal-dialog">
                <div class="modal-content  ">

                    <!-- Modal Header -->

                    <div class="modal-header bg-primary text-center text-white ">
                        <a class="navbar-brand" href="#">
                            <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
                        </a>
                        <h4 class="modal-title ">Cadastro de Disciplinas</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>

                            <p class="table-sm  text-right">TODOS os campos são obrigatórios</p>

                            <!-- nome -->
                            <div class="container">
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Nome</label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Desc</label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="descricao" name="descricao" placeholder="Uma breve descrição da disciplina" class="form-control input-md" required="" type="textArea">
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
                                <!-- select para professores -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="col-md-3 control-label" for="selectbasic">Prof</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control" title="Selecione um Responsável" name="id_professor">

                                            <option></option>
                                            <?php
                                            $sql = "SELECT * FROM usuarios WHERE tipo = 2 ORDER by nome";
                                            $sql = $pdo->query($sql);
                                            foreach ($sql->fetchAll() as $key) {
                                                echo "<option name='id_professor' value=\"";
                                                echo $key["id"];
                                                echo "\">" . $key['id'] . " - " . $key['nome'] . "</option>";
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
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </form>

    <?php
    require './tabelaRelDisciplinas.php';
    require './rodape.php';
    ?>


</body>
</html>
