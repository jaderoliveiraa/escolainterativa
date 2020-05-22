<!DOCTYPE html>
<?php
include '../controllers/connect.php';
require './menuPrincipal.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Frequência</title>
    </head>
    <body>
        <form>
            <!-- Tabela-->
            <div class="container-fluid">
                <?php
                $rs = $pdo->prepare("SELECT * FROM usuarios WHERE tipo = 4");
                $rs->execute();
                $disciplinas = $_POST['disciplinas'];
                $id_serie = $_POST = ['id_serie'];
                ?>

                <div class="container-fluid">
                    <div>
                        <Label>Disciplina</Label>
                        <input id="disciplinas" name="cidade" class="form-control" placeholder=""  type="text" value="<?php echo $disciplinas ?>" readonly>
                        <label>Serie</label>
                        <input id="serie" name="cidade" class="form-control" placeholder=""  type="text" value="<?php echo $id_serie ?>" readonly>
                    </div>
                    <table class="table table-striped table-hover table-sm" align="center" >
                        <thead class="titulo table-info"><th colspan="9">Lista de Alunos</th></thead>
                        <thead class="thead ">
                        <th class="">Codigo</th>
                        <th class="">Nome</th>
                        <th class="">Telefone</th>
                        <th class="">E-mail</th>
                        <th class="">Serie</th>
                        <th class="">Presença</th>
                        </thead>
                        <hr>
                        <tbody>
                            <?php while ($aluno = $rs->fetch(PDO::FETCH_ASSOC)) { ?>       
                                <tr>
                                    <td><?php echo $aluno['id']; ?></td>
                                    <td><?php echo $aluno['nome']; ?></td>
                                    <td><?php echo $aluno['telefone']; ?></td>
                                    <td><?php echo $aluno['email']; ?></td>
                                    <td><?php echo $aluno['id_serie']; ?></td>
                                    <td> 
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="presenca" id="presenca" value="p" type="radio">
                                            Presente
                                        </label>
                                        <label class="radio-inline" for="radios-1">
                                            <input name="presenca" id="presenca" value="a" type="radio">
                                            Ausente
                                        </label>

                                    </td>
                                </tr>  

                            <?php } ?>

                        </tbody>
                    </table><br><br><br>
                </div>

            </div>
        </form>

    </body>

    <?php
    require_once './rodape.php';
    ?>
</html>
