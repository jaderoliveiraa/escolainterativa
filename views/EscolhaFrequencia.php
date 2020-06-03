<!DOCTYPE html>
<?php
include '../controllers/connect.php';
require './menuPrincipal.php';
require '../system/session.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="container-sm"></br>
                <div class="container">
                    <form class="container-fluid" action="frequencia.php" method="POST">

                        <!-- Serie -->
                        <div id="oculto" class="row oculto">
                            <div class="col-md-2">
                                <label class="" for="selectbasic">Serie</label>
                            </div>
                            <div class="col-md-10">
                                <select  name="id_serie" class="form-control" required="">
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
                        </br>
                        <!-- Disciplina -->
                        <div id="oculto" class="row oculto">
                            <div class="col-md-2">
                                <label class="" for="selectbasic">Disciplina</label>
                            </div>
                            <div class="col-md-10">
                                <select  name="disciplinas" class="form-control" required="">
                                    <option></option>
                                    <?php
                                    $sql = "SELECT * FROM disciplinas";
                                    $sql = $pdo->query($sql);
                                    foreach ($sql->fetchAll() as $key) {
                                        echo "<option name='idUsuarios' value=\"";
                                        echo $key["id"];
                                        echo "\">" . $key['id'] . " - " . $key['nome'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick='history.go(-1)'>Voltar</button>
                            <button type="submit" class="btn btn-primary">Gerar Frequência</button>
                        </div>

                    </form>


                </div>
            </div>


        </div>

    </body>

    <?php
    require_once './rodape.php';
    ?>
</html>
