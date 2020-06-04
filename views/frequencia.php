<!DOCTYPE html>
<?php
include '../controllers/connect.php';
require './menuPrincipal.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--    <script src="js/jquery-3.3.1.js"></script>-->
        <<script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
        <title>Lista de Frequência</title>
    </head>
    <body>
        <form>
            <!-- Tabela-->
            <div class="container-fluid">
                <?php
                $disciplinas = $_GET['disciplinas'];
                $id_serie = $_GET['id_serie'];
                $rs = $pdo->prepare("SELECT * FROM usuarios WHERE tipo = 4 AND id_serie = $id_serie");
                $rs->execute();;
                ?>

                <div class="container-fluid">
                    <div>
                        <Label>Disciplina</Label>
                        <input id="disciplinas" name="disciplinas" class="form-control" placeholder=""  type="text" value="<?php echo $disciplinas ?>" readonly>
                        <label>Serie</label>
                        <input id="serie" name="id_serie" class="form-control" placeholder=""  type="text" value="<?php echo $id_serie ?>" readonly>
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
                        <th class="">Status</th>
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
                                    <button value="true" onclick="send(<?php echo $aluno['id']; ?>, this)" class="btn btn-success btn-sm">Presente</button>
                <button value="false" onclick="send(<?php echo $aluno['id']; ?>, this)" class="btn btn-danger btn-sm">Faltou</button>

                                    </td>
                                </tr>  

                            <?php } ?>

                        </tbody>
                    </table><br><br><br>
                </div>

            </div>
        </form>
        <script>

            function send(id, element) {
                let form = new FormData();

                form.append('id', id);
                form.append('status', element.value);


                fetch("../controllers/controllerFrequencia.php", {
                    method:"GET",
                    body: form
                })
                .then(response => response.json())
                .then(response => {
                    
                })


            }
       
    </script>

    </body>

    <?php
    require_once './rodape.php';
    ?>
</html>
