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
            $rs = $pdo->prepare("SELECT * FROM disciplinas");
            $rs->execute();
            
            ?>


            <div class="container-fluid">
                <table class="table table-striped table-hover table-sm" align="center" >
                    <thead class="titulo table-success"><th colspan="7">Lista de Disciplinas</th></thead>
                    <thead class="thead ">
                    <th class="">Codigo</th>
                    <th class="">Disciplina</th>
                    <th class="">Descrição</th>
                    <th class="">Situação</th>
                    <th class="">Alterar</th>
                    <th class="">Inativar</th>
                    <th class="">Ver Detalhes</th>
                    </thead>
                    <hr>
                    <tbody>
                        <?php while ($disciplina = $rs->fetch(PDO::FETCH_ASSOC)) { ?>       
                            <tr>
                                <td><?php echo $disciplina['id']; ?></td>
                                <td><?php echo $disciplina['nome']; ?></td>
                                <td><?php echo $disciplina['descricao']; ?></td>
                                <td><?php
                                    if ($disciplina ['situacao'] == 1) {
                                        echo "Ativo";
                                    } else {
                                        echo 'Inativo';
                                    }
                                    ?></td>

                                <td><a href="formAltfuncionarios.php?id=<?php echo $disciplina['id']; ?>" class="img-circle"><img src="../img/editar.png" alt="Alterar"/><a></td>
                                            <td><a href="javascript:func()" onclick="inativar(<?php echo $disciplina['id']; ?>)"><img src="../img/proibido.png" alt="Inativar"/></a></td>
                                            <td><a href="formAltfuncionarios.php?id=<?php echo $disciplina['id']; ?>"><img src="../img/lista.png" alt=""/><a></td>

                                                        </tr>  

                                                    <?php } ?>

                                                    </tbody>
                                                    </table><br><br><br>
                                                    </div>

                                                    </div>
                                                    </body>
                                                    </html>
