<!DOCTYPE html>
<?php
include_once '../controllers/connect.php';
include_once './rodape.php';
$id = 0; //definir id como "0"
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
    $sql = "UPDATE usuarios SET nome = '$nome',  sobrenome = '$sobrenome', dataNasc = '$dataNasc', sexo = '$sexo', telefone = '$telefone', email = '$email', senha = '$senha', cep = '$cep', rua = '$rua', num = '$num', bairro = '$bairro', cidade = '$cidade', estado = '$estado', id_serie = '$id_serie', tipo = '$tipo', responsavel = '$responsavel', situacao = '$situacao' WHERE id = '$id'";
    $pdo->query($sql);
}
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
} else {
    
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.3.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../system/js/form.js" type="text/javascript"></script>
        <script src="../system/js/divs.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Detalhes de Usuário</title>
    </head>
    <body>
        <form method="POST" >
            <div id="container_geral" class="container-fluid">
                <div class="" id="">
                    <div class="">
                        <div class="">
                            <div class=" bg-primary text-center text-white ">
                                <a class="navbar-brand" href="#">
                                    <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
                                </a>
                                <h4 class="modal-title">Detalhes do  Usuário</h4>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">

                                <div class="container">
                                    <!-- nome -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Nome </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $dado['nome'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Sobrenome -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Sobrenome </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="sobrenome" name="sobrenome" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $dado['sobrenome'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Data de Nascimento -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Nasc. </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="dtnasc" name="dataNasc" placeholder="DD/MM/AAAA" class="form-control input-sm" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" value="<?php echo $dado['dataNasc'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Telefone  -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Tel. </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                   OnKeyPress="formatar('## #####-####', this)" value="<?php echo $dado['telefone'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- e-mail -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Email </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $dado['email'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Rua -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Rua</span>
                                        </div>
                                        <div class="col">
                                            <input id="rua" name="rua" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['rua'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Numero -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Nº*</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="num" name="num" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['num'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Bairro -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Bairro</span>

                                        </div>
                                        <div class="col-md-10">
                                            <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['bairro'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Cidade -->
                                    <div class="row">
                                        <div class="col-md-2    ">
                                            <label>Cidade</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['cidade'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Estado -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Estado</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="estado" name="estado" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['estado'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Serie -->
                                    <div id="oculto" class="row oculto">
                                        <div class="col-md-2">
                                            <label class="" for="selectbasic">Serie</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select  name="id_serie" class="form-control" value="<?php echo $dado['id_serie'] ?>" readonly>
                                                <option></option>
                                                <?php
                                                $sql = "SELECT * FROM serie";
                                                $sql = $pdo->query($sql);
                                                foreach ($sql->fetchAll() as $key) {
                                                    echo "<option name='idUsuarios' value=\"";
                                                    echo $key["id_serie"];
                                                    echo "\">" . $key['id_serie'] . " - " . $key['descricao'] . "</option>";
                                                }
                                                ?>
                                            </select>

                                        </div>

                                    </div>
                                    <!-- Select Responsáveis -->
                                    <div id="oculto2" class="row oculto2">
                                        <div class="col-md-2">
                                            <label class="" for="selectbasic">Responsavel </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select name="responsavel" class="form-control" title="Selecione um Responsável"  value="<?php echo $dado['responsavel'] ?>">

                                                <option></option>
                                                <?php
                                                $sql = "SELECT * FROM usuarios WHERE tipo = 3 ORDER by nome";
                                                $sql = $pdo->query($sql);
                                                foreach ($sql->fetchAll() as $key) {
                                                    echo "<option name='idUsuarios' value=''";
                                                    echo $key["id"];
                                                    echo "\">" . $key['nome'] . " - " . $key['email'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" onclick='history.go(-1)'>Voltar</button>
                                        <a title='Imprimir conteúdo' href='javascript:window.print()' class="text-white">
                                            <button type="button" class="btn btn-primary" ><b>Imprimir</b></button>
                                        </a>
                                    </div>
                                    </br>
                                    </br>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
