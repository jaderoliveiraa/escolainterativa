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
$rs = $pdo->prepare("SELECT * FROM alunos");
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
                                <td><?php echo $aluno['serie']; ?></td>
                                <td><?php
                        if ($aluno['situacao'] == 1) {
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

                                                    </body>
                                                    </html>
