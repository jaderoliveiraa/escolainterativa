<?php

require_once 'connect.php';
$id = 0;
if (isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}//pegar os dados do campo id selecionado



if (isset($_POST['nome']) && empty($_POST['nome']) == false) {//verificar
    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $dataNasc = addslashes($_POST['dataNasc']);
    $sexo = addslashes($_POST['sexo']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes(md5($_POST['senha']));
    $cep = addslashes($_POST['cep']);
    $rua = addslashes($_POST['rua']);
    $num = addslashes($_POST['num']);
    $bairro = addslashes($_POST['bairro']);
    $cidade = addslashes($_POST['cidade']);
    $estado = addslashes($_POST['estado']);
    $id_serie = addslashes($_POST['id_serie']);
    $tipo = addslashes($_POST['tipo']);
    $responsavel = addslashes($_POST['responsavel']);
    $situacao = addslashes($_POST['situacao']);
    if ($_POST['id_serie'] == NULL) {
        $id_serie = 2001;
    } else {
        
    }

    $stmt = $pdo->prepare("UPDATE usuarios SET nome,"
            . "sobrenome,"
            . "dataNasc,"
            . "sexo,"
            . "telefone,"
            . "email,"
            . "senha,"
            . "cep,"
            . "rua,"
            . "num,"
            . "bairro,"
            . "cidade,"
            . "estado,"
            . "id_serie,"
            . "tipo,"
            . "responsavel,"
            . "situacao) VALUES (:nome,"
            . ":sobrenome,"
            . ":dataNasc,"
            . ":sexo,"
            . ":telefone,"
            . ":email,"
            . ":senha,"
            . ":cep,"
            . ":rua,"
            . ":num,"
            . ":bairro,"
            . ":cidade,"
            . ":estado,"
            . ":id_serie,"
            . ":tipo,"
            . ":responsavel,"
            . ":situacao");
    $stmt->execute(array(
        ':nome' => $nome,
        ':sobrenome' => $sobrenome,
        ':dataNasc' => $dataNasc,
        ':sexo' => $sexo,
        ':telefone' => $telefone,
        ':email' => $email,
        ':senha' => $senha,
        ':cep' => $cep,
        ':rua' => $rua,
        ':num' => $num,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':id_serie' => $id_serie,
        ':tipo' => $tipo,
        ':responsavel' => $responsavel,
        ':situacao' => $situacao
    ));

}

