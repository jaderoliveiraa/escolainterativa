<!DOCTYPE html>
<?php
include 'menuPrincipal.php';
require_once '../controllers/connect.php';
require_once './rodape.php';
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Escolha Boletim</title>
    </head>
    <body>
        <div class="container-sm">
            <div class="container">
                <div class="container-sm"></br>
                    <div class="container">
                        <h3>Impressão de Boletim</h3>
                        <h4>Escolha as opções</h4>
                        <form action="boletim.php" method="POST">
                            <!-- Aluno --><hr>
                            <div id="oculto" class="row oculto">
                                <div class="col-md-2">
                                    <label class="" for="selectbasic">Aluno</label>
                                </div>
                                <div class="col-md-6">
                                    <select  name="aluno" class="form-control" required="">
                                        <option></option>
                                        <?php
                                        $sql2 = "SELECT * FROM usuarios WHERE tipo = 4";
                                        $result = $pdo->query($sql2);
                                        foreach ($result->fetchAll() as $key) {
                                            echo "<option name='idUsuarios' value=\"";
                                            echo $key["id"];
                                            echo "\">" . $key['id'] . " - " . $key['nome'] . " - " . $key['email'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div></br>
                            <!-- Serie -->
                            <div id="oculto" class="row oculto">
                                <div class="col-md-2">
                                    <label class="" for="selectbasic">Serie</label>
                                </div>
                                <div class="col-md-6">
                                    <select  name="id_serie" class="form-control" required="">
                                        <option></option>
                                        <?php
                                        $sql = "SELECT * FROM serie";
                                        $resultado = $pdo->query($sql);
                                        foreach ($resultado->fetchAll() as $key) {
                                            echo "<option name='idUsuarios' value=\"";
                                            echo $key["id_serie"];
                                            echo "\">" . $key['id_serie'] . " - " . $key['descricao'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div></br>

                            <!-- Turma -->
                            <div id="oculto" class="row oculto">
                                <div class="col-md-2">
                                    <label class="" for="selectbasic">Turma</label>
                                </div>
                                <div class="col-md-2">
                                    <select  name="turma" class="form-control" required="">
                                        <option>
                                            <?php
                                            $sql3 = "SELECT * FROM turma";
                                            $result3 = $pdo->query($sql3);
                                            
                                            foreach ($result3->fetchAll() as $turma) {
                                                echo "<option name='idUsuarios' value=\"";
                                                
                                                switch ($turma["id_turma"]) {
                                                    case 5001:
                                                        echo " Turma A";
                                                        break;
                                                    case 5002:
                                                        echo " Turma B";
                                                        break;
                                                    case 5003:
                                                        echo " Turma C";
                                                        break;
                                                    case 5004:
                                                        echo " Turma D";
                                                        break;
                                                    case 5005:
                                                        echo " Turma E";
                                                        break;
                                                    
                                                    

                                                    default:
                                                        break;
                                                }
                                                
                                                echo "\">" .  $turma['letra'] . "</option>";
                                            }
                                            ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            </br>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Gerar Boletim</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
