<!DOCTYPE html>
<?php
include '../controllers/connect.php';
require './menuPrincipal.php';
require_once '../system/session.php';
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
        <!-- Tabela-->
        <div class="container-fluid">
            <?php
            $disciplinas = $_POST['disciplinas'];
            $id_serie = $_POST['id_serie'];
            $data = $_POST['data'];
            $rs = $pdo->prepare("SELECT * FROM usuarios WHERE tipo = 4 AND id_serie = $id_serie");
            $rs->execute();
            ?>
            <div class="container">
                <div class="container-sm">
                    <table class="table table-striped table-hover table-sm" align="center" >
                        <tr>
                            <td>Data</td>
                            <td>Disciplina</td>
                            <td>Serie</td>
                        </tr>
                        <tr>
                            <td><?php echo $data ?></td>
                            <td><?php echo $disciplinas ?></td>
                            <td><?php echo $id_serie ?></td>
                        </tr>
                    </table>
                </div>
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
                            <td><div id="jq">
                                    <button class="btn btn-success btn-sm" value="true" onclick="send(<?php echo $aluno['id']; ?>, <?php echo $aluno['id_serie']; ?>, <?php echo $disciplinas ?>, this)" >Presente</button>
                                    <button class="btn btn-danger btn-sm" value="false" onclick="send(<?php echo $aluno['id']; ?>, <?php echo $aluno['id_serie']; ?>, <?php echo $disciplinas ?>, this)" >Faltou</button>
                                </div>
                            </td>
                            <td><div id="output">
                                    <?php
                                    $rs2 = $pdo->prepare("SELECT * FROM frequencia WHERE id_serie = $id_serie");
                                    $rs2->execute();
                                    $frequencia = $rs2->fetch(PDO::FETCH_ASSOC);
                                    echo $frequencia['status'];

                                    if (isset($frequencia['status'])) {
                                        switch ($frequencia['status']) {
                                            case 1:
                                                echo "Presente";
                                                break;
                                            case 0:
                                                echo "Ausente";
                                                break;

                                            default:
                                                echo "Não informado";
                                                break;
                                        }
                                    } else {
                                        echo 'Não informado';
                                    }
                                    ?>
                                </div></td>
                        </tr>  

                    <?php } ?>

                </tbody>
            </table><br><br><br>
        </div>

    </div>
    <script>

        function send(id, id_serie, disciplinas, element) {
            let form = new FormData();

            form.append('id', id);
            form.append('id_serie', id_serie);
            form.append('disciplinas', disciplinas);
            form.append('status', element.value);
            form.append('data', data);


            fetch("../controllers/controllerFrequencia.php", {
                method: "POST",
                body: form
            })
                    .then(response => response.json())
                    .then(response => {

                    });

            const $output = $('#output');
            const btns_jq = $('#jq .btn');
            btns_jq.click(function () {
                let str = $(this).text();
                $output.text(str);
            });


        }


    </script>



</body>

<?php
require_once './rodape.php';
?>
</html>
