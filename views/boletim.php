<!DOCTYPE html>
<?php
require_once '../controllers/connect.php';
require_once '../system/session.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--<link href="../system/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="../system/css/estiloMenu.css" rel="stylesheet" type="text/css"/>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../system/js/form.js" type="text/javascript"></script>
        <script src="../system/js/divs.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Boletim Escolar</title>


    </head>
    <body>

        <div class="container-fluid">

            <table class="table table-striped table-hover table-sm" align="center" >

                <thead class="titulo table-info text-success">
                <div class="container">
                    <div class="container-sm">
                        <?php
                        /* Select pada Disciplinas */
                        $rs20 = $pdo->prepare("SELECT id FROM disciplinas");
                        $rs20->execute();
                        while ($disciplinas = $rs20->fetchAll(PDO::FETCH_COLUMN, 0)) {
                            
                        }


                        /* variaveis */
                        $portugues = 4001;
                        $matematica = 4002;
                        $biologia = 4003;
                        $geografia = 4004;
                        $filosofia = 4005;
                        $ingles = 4006;
                        $historia = 4007;
                        $espanhol = 4008;
                        $libras = 4010;

                        $aluno2 = $_POST['aluno'];
                        $serie = $_POST['id_serie'];
                        $turma = $_POST['turma'];

                        $rs = $pdo->prepare("SELECT * FROM usuarios WHERE id = $aluno2");
                        $rs->execute();
                        $aluno = $rs->fetch(PDO::FETCH_ASSOC);

                        $rs10 = $pdo->prepare("SELECT * FROM serie WHERE id_serie = $serie");
                        $rs10->execute();
                        $serie2 = $rs10->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <table class="table table-striped table-hover table-sm" align="center" >
                            <tr>
                                <td>Aluno</td>
                                <td>Serie</td>
                                <td>Turma</td>
                            </tr>
                            <tr>
                                <td><?php echo $aluno['id'] . " - " . $aluno['nome']; ?></td>
                                <td><?php echo $serie2['descricao']; ?></td>
                                <td><?php echo $turma; ?></td>
                            </tr>
                        </table>
                    </div>
                </div></table>
            <?php
            ?>

            <table class="table table-hover table-sm" align="center" >
                <thead class="titulo table-success"><th colspan="8">Boletim do aluno</th></thead>
                <thead class="thead ">
                <th class="">Disciplina</th>
                <th class="">1º Bimestre</th>
                <th class="">2º Bimestre</th>
                <th class="">3º Bimestre</th>
                <th class="">4º Bimestre</th>
                <th class="">Média Final</th>
                <th class="">Recuperação Final</th>
                <th class="">Resultado</th>
                </thead>
                <hr>
                <tbody>
                    <?php
                    $query = $pdo->prepare("SELECT * FROM `notas` n 
                                    JOIN usuarios u
                                    ON n.id_aluno = u.id
                                    JOIN disciplinas d
                                    ON n.id_disciplina = d.id WHERE id_aluno = $aluno2;");
                    $query->execute();
                    $notas = $query->fetch(PDO::FETCH_ASSOC);

                    /* parte do codigo responsável pelas notas por disciplina/periodo */

                    /* PORTUGUES */
                    /* Select bimestre 1 PORTUGUES */
                    $bm1 = $pdo->prepare("SELECT id_disciplina, AVG(valor) FROM `notas` n 
                                    JOIN usuarios u
                                    ON n.id_aluno = u.id
                                    JOIN disciplinas d
                                    ON n.id_disciplina = d.id WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $portugues");
                    $bm1->execute();
                    $bimestre1 = $bm1->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   Portugues */
                    $bm2 = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $portugues");
                    $bm2->execute();
                    $bimestre2 = $bm2->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   Portugues */
                    $bm3 = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $portugues");
                    $bm3->execute();
                    $bimestre3 = $bm3->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   Portugues */
                    $bm4 = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $portugues");
                    $bm4->execute();
                    $bimestre4 = $bm4->fetch(PDO::FETCH_ASSOC);

                    /* MATEMÁTICA */
                    /* Select bimestre 1 MATEMÁTICA */
                    $bm1mt = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $matematica");
                    $bm1mt->execute();
                    $bimestre1mt = $bm1mt->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   Portugues */
                    $bm2mt = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $matematica");
                    $bm2mt->execute();
                    $bimestre2mt = $bm2mt->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   Portugues */
                    $bm3mt = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $matematica");
                    $bm3mt->execute();
                    $bimestre3mt = $bm3mt->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   Portugues */
                    $bm4mt = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $matematica");
                    $bm4mt->execute();
                    $bimestre4mt = $bm4mt->fetch(PDO::FETCH_ASSOC);


                    /* BIOLOGIA */
                    /* Select bimestre 1 BIOLOGIA */
                    $bm1bio = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $biologia");
                    $bm1bio->execute();
                    $bimestre1bio = $bm1bio->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   Portugues */
                    $bm2bio = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $biologia");
                    $bm2bio->execute();
                    $bimestre2bio = $bm2bio->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   Portugues */
                    $bm3bio = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $biologia");
                    $bm3bio->execute();
                    $bimestre3bio = $bm3bio->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   Portugues */
                    $bm4bio = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $biologia");
                    $bm4bio->execute();
                    $bimestre4bio = $bm4bio->fetch(PDO::FETCH_ASSOC);

                    /* GEOGRAFIA */
                    /* Select bimestre 1 BIOLOGIA */
                    $bm1geo = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $geografia");
                    $bm1geo->execute();
                    $bimestre1geo = $bm1geo->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   Portugues */
                    $bm2geo = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $geografia");
                    $bm2geo->execute();
                    $bimestre2geo = $bm2geo->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   Portugues */
                    $bm3geo = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $geografia");
                    $bm3geo->execute();
                    $bimestre3geo = $bm3geo->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   Portugues */
                    $bm4geo = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $geografia");
                    $bm4geo->execute();
                    $bimestre4geo = $bm4geo->fetch(PDO::FETCH_ASSOC);

                    /* FILOSOFIA */
                    /* Select bimestre 1 FILOSOFIA */
                    $bm1fil = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $filosofia");
                    $bm1fil->execute();
                    $bimestre1fil = $bm1fil->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   */
                    $bm2fil = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $filosofia");
                    $bm2fil->execute();
                    $bimestre2fil = $bm2fil->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   */
                    $bm3fil = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $filosofia");
                    $bm3fil->execute();
                    $bimestre3fil = $bm3fil->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   */
                    $bm4fil = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $filosofia");
                    $bm4fil->execute();
                    $bimestre4fil = $bm4fil->fetch(PDO::FETCH_ASSOC);

                    /* INGLÊS */
                    /* Select bimestre 1 INGLÊS */
                    $bm1ing = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $ingles");
                    $bm1ing->execute();
                    $bimestre1ing = $bm1ing->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   */
                    $bm2ing = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $ingles");
                    $bm2ing->execute();
                    $bimestre2ing = $bm2ing->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   */
                    $bm3ing = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $ingles");
                    $bm3ing->execute();
                    $bimestre3ing = $bm3ing->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   */
                    $bm4ing = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $ingles");
                    $bm4ing->execute();
                    $bimestre4ing = $bm4ing->fetch(PDO::FETCH_ASSOC);

                    /* HISTÓRIA */
                    /* Select bimestre 1 HISTÓRIA */
                    $bm1his = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $historia");
                    $bm1his->execute();
                    $bimestre1his = $bm1his->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   */
                    $bm2his = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $historia");
                    $bm2his->execute();
                    $bimestre2his = $bm2his->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   */
                    $bm3his = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $historia");
                    $bm3his->execute();
                    $bimestre3his = $bm3his->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   */
                    $bm4his = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $historia");
                    $bm4his->execute();
                    $bimestre4his = $bm4his->fetch(PDO::FETCH_ASSOC);

                    /* ESPANHOL */
                    /* Select bimestre 1 ESPANHOL */
                    $bm1esp = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $espanhol");
                    $bm1esp->execute();
                    $bimestre1esp = $bm1esp->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   */
                    $bm2esp = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $espanhol");
                    $bm2esp->execute();
                    $bimestre2esp = $bm2esp->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   */
                    $bm3esp = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $espanhol");
                    $bm3esp->execute();
                    $bimestre3esp = $bm3esp->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   */
                    $bm4esp = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $espanhol");
                    $bm4esp->execute();
                    $bimestre4esp = $bm4esp->fetch(PDO::FETCH_ASSOC);

                    /* LIBRAS */
                    /* Select bimestre 1 LIBRAS */
                    $bm1lib = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 1' AND id_disciplina = $libras");
                    $bm1lib->execute();
                    $bimestre1lib = $bm1lib->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 2   */
                    $bm2lib = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 2' AND id_disciplina = $libras");
                    $bm2lib->execute();
                    $bimestre2lib = $bm2lib->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 3   */
                    $bm3lib = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 3' AND id_disciplina = $libras");
                    $bm3lib->execute();
                    $bimestre3lib = $bm3lib->fetch(PDO::FETCH_ASSOC);
                    /* Select bimestre 4   */
                    $bm4lib = $pdo->prepare("SELECT AVG(valor) FROM `notas` WHERE id_aluno = $aluno2 AND periodo = 'Bimestre 4' AND id_disciplina = $libras");
                    $bm4lib->execute();
                    $bimestre4lib = $bm4lib->fetch(PDO::FETCH_ASSOC);
                    ?>



                    <tr>
                        <td><?php echo $portugues . " - Lingua Portuguesa " ?></td>
                        <td><?php echo number_format($bimestre1['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
                            <?php
                            $mediapt = ($bimestre1['AVG(valor)'] + $bimestre2['AVG(valor)'] + $bimestre3['AVG(valor)'] + $bimestre4['AVG(valor)']) / 4;
                            echo number_format($mediapt, 2, ',', '.');
                            ?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
<?php
if ($mediapt < 7) {
    echo 'Reprovado';
} else {
    echo 'Aprovado';
}
?>
                        </td>

                    </tr>
                    <tr>
                        <td><?php echo $matematica . " -  Matemática" ?></td>
                        <td><?php echo number_format($bimestre1mt['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2mt['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3mt['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4mt['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
<?php
$mediamt = ($bimestre1mt['AVG(valor)'] + $bimestre2mt['AVG(valor)'] + $bimestre3mt['AVG(valor)'] + $bimestre4mt['AVG(valor)']) / 4;
echo number_format($mediamt, 2, ',', '.');
?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
                            <?php
                            if ($mediamt < 7) {
                                echo 'Reprovado';
                            } else {
                                echo 'Aprovado';
                            }
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td><?php echo $biologia . " -  Biologia" ?></td>
                        <td><?php echo number_format($bimestre1bio['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2bio['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3bio['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4bio['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
<?php
$mediabio = ($bimestre1bio['AVG(valor)'] + $bimestre2bio['AVG(valor)'] + $bimestre3bio['AVG(valor)'] + $bimestre4bio['AVG(valor)']) / 4;
echo number_format($mediabio, 2, ',', '.');
?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
                            <?php
                            if ($mediabio < 7) {
                                echo 'Reprovado';
                            } else {
                                echo 'Aprovado';
                            }
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td><?php echo $geografia . " -  Geografia" ?></td>
                        <td><?php echo number_format($bimestre1geo['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2geo['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3geo['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4geo['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
<?php
$mediageo = ($bimestre1geo['AVG(valor)'] + $bimestre2geo['AVG(valor)'] + $bimestre3geo['AVG(valor)'] + $bimestre4geo['AVG(valor)']) / 4;
echo number_format($mediageo, 2, ',', '.');
?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
<?php
if ($mediageo < 7) {
    echo 'Reprovado';
} else {
    echo 'Aprovado';
}
?>
                        </td>


                    </tr>
                    <tr>
                        <td><?php echo $filosofia . " -  Filosofia" ?></td>
                        <td><?php echo number_format($bimestre1fil['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2fil['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3fil['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4fil['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
                            <?php
                            $mediafil = ($bimestre1fil['AVG(valor)'] + $bimestre2fil['AVG(valor)'] + $bimestre3fil['AVG(valor)'] + $bimestre4fil['AVG(valor)']) / 4;
                            echo number_format($mediafil, 2, ',', '.');
                            ?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
<?php
if ($mediafil < 7) {
    echo 'Reprovado';
} else {
    echo 'Aprovado';
}
?>
                        </td>


                    </tr>
                    <tr>
                        <td><?php echo $ingles . " -  Inglês" ?></td>
                        <td><?php echo number_format($bimestre1ing['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2ing['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3ing['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4ing['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
                            <?php
                            $mediaing = ($bimestre1ing['AVG(valor)'] + $bimestre2ing['AVG(valor)'] + $bimestre3ing['AVG(valor)'] + $bimestre4ing['AVG(valor)']) / 4;
                            echo number_format($mediaing, 2, ',', '.');
                            ?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
<?php
if ($mediaing < 7) {
    echo 'Reprovado';
} else {
    echo 'Aprovado';
}
?>
                        </td>


                    </tr>
                    <tr>
                        <td><?php echo $historia . " -  História" ?></td>
                        <td><?php echo number_format($bimestre1his['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2his['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3his['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4his['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
                            <?php
                            $mediahis = ($bimestre1his['AVG(valor)'] + $bimestre2his['AVG(valor)'] + $bimestre3his['AVG(valor)'] + $bimestre4his['AVG(valor)']) / 4;
                            echo number_format($mediahis, 2, ',', '.');
                            ?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
                            <?php
                            if ($mediahis < 7) {
                                echo 'Reprovado';
                            } else {
                                echo 'Aprovado';
                            }
                            ?>
                        </td>


                    </tr>
                    <tr>
                        <td><?php echo $espanhol . " -  Espanhol" ?></td>
                        <td><?php echo number_format($bimestre1esp['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2esp['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3esp['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4esp['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
<?php
$mediaesp = ($bimestre1esp['AVG(valor)'] + $bimestre2esp['AVG(valor)'] + $bimestre3esp['AVG(valor)'] + $bimestre4esp['AVG(valor)']) / 4;
echo number_format($mediaesp, 2, ',', '.');
?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
                            <?php
                            if ($mediaesp < 7) {
                                echo 'Reprovado';
                            } else {
                                echo 'Aprovado';
                            }
                            ?>
                        </td>


                    </tr>
                    <tr>
                        <td><?php echo $libras . " -  Libras" ?></td>
                        <td><?php echo number_format($bimestre1lib['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre2lib['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre3lib['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format($bimestre4lib['AVG(valor)'], 2, ',', '.'); ?></td>
                        <td>
                            <?php
                            $medialib = ($bimestre1lib['AVG(valor)'] + $bimestre2lib['AVG(valor)'] + $bimestre3lib['AVG(valor)'] + $bimestre4lib['AVG(valor)']) / 4;
                            echo number_format($medialib, 2, ',', '.');
                            ?>
                        </td>
                        <td><?php echo "0.00"; ?></td>
                        <td>
                            <?php
                            if ($medialib < 7) {
                                echo 'Reprovado';
                            } else {
                                echo 'Aprovado';
                            }
                            ?>
                        </td>


                    </tr>

                </tbody>
            </table>
            <hr>
            </br>
            <div class="modal-footer">
                <button class="btn btn-danger btn-md pull-right" onclick='history.go(-1)'>Voltar</button> 
                <button class="btn btn-success btn-md pull-right" onclick='javascript:window.print()'>Imprimir</button>

            </div>

        </div>
<?php
require_once './rodape.php';
?>
    </body>
</html>
