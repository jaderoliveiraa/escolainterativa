<?php

require_once 'connect.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNasc = $_POST['dataNasc'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$id_serie = $_POST['id_serie'];
$tipo = $_POST['tipo'];
$responsavel = $_POST['responsavel'];
$situacao = $_POST['situacao'];

if ($_POST['id_serie'] == NULL) {
    $id_serie = 2001;
} else {
    
}

$sql = "INSERT INTO usuarios (nome,"
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
        . ":situacao)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':dataNasc', $dataNasc);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':rua', $rua);
$stmt->bindParam(':num', $num);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':id_serie', $id_serie);
$stmt->bindParam(':tipo', $tipo);
$stmt->bindParam(':responsavel', $responsavel);
$stmt->bindParam(':situacao', $situacao);

if ($stmt->execute()) {
    echo "<script> alert('Usuário Inserido com Sucesso!'); window.location.href = '../views/cadUsuarios.php';</script>";
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}


