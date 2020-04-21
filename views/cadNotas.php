<!DOCTYPE html>
<?php
require_once './menuPrincipal.php';
require_once '../controllers/connect.php';
?>
<html>
    <head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--<link href="../system/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="../system/css/estiloMenu.css" rel="stylesheet" type="text/css"/>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../system/js/form.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Lançamentos de Notas</title>
    </head>
    <body>
        <div class="container-sm">
            <form class="container-fluid container-sm" action="../controllers/controllerNotas.php" method="POST">


                <div class="" id="">
                    <div class="form-control">
                        <div class="">
                            <!-- Modal Cabeçalho -->

                            <div class="modal-header bg-primary text-center text-white ">
                                <a class="navbar-brand" href="#">
                                    <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
                                </a>
                                <h4 class="modal-title">Lançamento de notas</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">


                                <p class="table-sm  text-right">Todos os campos são obrigatórios</p>

                                <!-- Select Aluno -->
                                <div class="form-group" required="">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="" for="selectbasic">Aluno </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="id_aluno">

                                                <option></option>
                                                <?php
                                                $sql = "SELECT * FROM usuarios WHERE tipo = 4 ORDER by nome";
                                                $sql = $pdo->query($sql);
                                                foreach ($sql->fetchAll() as $key) {
                                                    echo "<option name='idUsuarios' value=\"";
                                                    echo $key["id"];
                                                    echo "\">" . $key['nome'] . " - " . $key['email'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Select do Tipo-->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="" for="selectbasic">Tipo</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select required id="tipo" name="tipo" class="form-control">
                                            <option value=""></option>
                                            <option value="Parcial">Parcial</option>
                                            <option value="Final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select do Período-->
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="" for="selectbasic">Bimestre</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select required id="periodo" name="periodo" class="form-control">
                                            <option value=""></option>
                                            <option value="Bimestre 1">Bimestre 1</option>
                                            <option value="Bimestre 2">Bimestre 2</option>
                                            <option value="Bimestre 3">Bimestre 3</option>
                                            <option value="Bimestre 4">Bimestre 4</option>
                                            <option value="Recuperação Final">Recuperação Final</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Aluno -->
                                <div class="form-group" required="">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="" for="selectbasic">Disciplina </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" title="Selecione uma Disciplina" name="id_disciplina">

                                                <option></option>
                                                <?php
                                                $sql = "SELECT * FROM disciplinas ORDER by nome";
                                                $sql = $pdo->query($sql);
                                                foreach ($sql->fetchAll() as $key) {
                                                    echo "<option name='idDisciplinas' value=\"";
                                                    echo $key["id"];
                                                    echo "\">" . $key['id'] . " - " . $key['nome'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- nome -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Valor</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="valor" name="valor" placeholder="" class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Lançar</button>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>



            </form>

        </div>
        <?php
        include './rodape.php';
        ?>
    </body>
</html>
