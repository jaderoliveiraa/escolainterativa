<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body></br>
        <div class="container-fluid">
            <!-- Select Aluno -->
            <div class="form-group" required="">
                <div class="row">
                    <div class="col-md-2">
                        <label class="" for="selectbasic"><b>Escolha um Aluno</b> </label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" title="Selecione um Responsável" name="idUsuarios">

                            <option></option>
                            <?php
                            $sql = "SELECT * FROM usuarios WHERE tipo = 4 ORDER by nome";
                            $sql = $pdo->query($sql);
                            foreach ($sql->fetchAll() as $key) {
                                echo "<option name='idUsuarios' value=\"";
                                echo $key["id"];
                                echo "\">" . $key['id'] . " - " . $key['nome'] . " - ". $key['email']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div> 
            
            <!-- Select Dsiciplina -->
            <div class="form-group" required="">
                <div class="row">
                    <div class="col-md-2">
                        <label class="" for="selectbasic"><b>Escolha uma Disciplina</b> </label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" title="Selecione uma Disciplina" name="idDisciplina">

                            <option></option>
                            <?php
                            $relacao = "SELECT * FROM disciplinas ORDER by nome";
                            $relacao = $pdo->query($relacao);
                            foreach ($relacao->fetchAll() as $key2) {
                                echo "<option name='idDisciplinas' value=\"";
                                echo $key2["id"];
                                echo "\">" . $key2['id'] . " - " . $key2['nome']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <?php
            $key['id'] = $dado;
            $key2['id'] = $dado2;
            $rs = $pdo->prepare("SELECT * FROM notas WHERE :id_aluno =  AND :id_disciplina = $dado2");
            $rs->execute();
            ?>
            <!-- Tabela de Dsciplinas por alunos -->
            <div class="container-fluid">
                <table class="table table-striped table-hover table-sm" align="center" >
                    <thead class="titulo table-info"><th colspan="9">Lista de Notas</th></thead>
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
