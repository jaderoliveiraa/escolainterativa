<!DOCTYPE html>
<?php
require_once '../controllers/connect.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Tabela-->
        <div class="container-fluid">
            <?php
            $rs = $pdo->prepare("SELECT * FROM usuarios WHERE tipo = 4");
            $rs->execute();
            ?>

            <div class="container-fluid">
                <table class="table table-striped table-hover table-sm" align="center" >
                    <thead class="titulo table-info"><th colspan="9">Lista de Alunos</th></thead>
                    <thead class="thead ">
                    <th class="">Codigo</th>
                    <th class="">Nome</th>
                    <th class="">Telefone</th>
                    <th class="">E-mail</th>
                    <th class="">Serie</th>
                    <th class="">Situação</th>
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
                                <td><?php
                                    if ($aluno['situacao'] == 1) {
                                        echo "Ativo";
                                    } else {
                                        echo 'Inativo';
                                    }
                                    ?></td>

                                

                                                        </tr>  

                                                    <?php } ?>

                                                    </tbody>
                                                    </table><br><br><br>
                                                    </div>

                                                    </div>

                                                    </body>
                                                    </html>
