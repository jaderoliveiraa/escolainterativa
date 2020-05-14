<!DOCTYPE html>
<?php
include_once 'menuPrincipal.php';
include_once 'rodape.php';
require '../controllers/connect.php';

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
    header("location: ../views/cadUsuarios.php");
}
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
} else {
    header("location: ../views/cadUsuarios.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../system/js/form.js" type="text/javascript"></script>
        <script src="../system/js/divs.js" type="text/javascript"></script>
        <title></title>
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
                                <h4 class="modal-title">Alterar Usuário</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <p class="table-sm  text-right">Todos os campos são obrigatórios</p>

                                <div class="container">
                                    <!-- nome -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Nome </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $dado['nome'] ?>">
                                        </div>
                                    </div>
                                    <!-- Sobrenome -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Sobrenome </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="sobrenome" name="sobrenome" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $dado['sobrenome'] ?>">
                                        </div>
                                    </div>
                                    <!-- Data de Nascimento -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Nasc. </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="dtnasc" name="dataNasc" placeholder="DD/MM/AAAA" class="form-control input-sm" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" value="<?php echo $dado['dataNasc'] ?>">
                                        </div>
                                    </div>
                                    <!--sexo caixa de seleção -->
                                    <div class="row">
                                        <div class="col">
                                            <label>Sexo </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label required="" class="radio-inline" for="radios-0" >
                                                <input name="sexo" id="sexo" value="masculino" type="radio" >
                                                Masculino
                                            </label> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="radios-1">
                                                <input name="sexo" id="sexo" value="feminino" type="radio">
                                                Feminino
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Telefone  -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Tel. </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                   OnKeyPress="formatar('## #####-####', this)" value="<?php echo $dado['telefone'] ?>">
                                        </div>
                                    </div>
                                    <!-- e-mail -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Email </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $dado['email'] ?>">
                                        </div>
                                    </div>
                                    <!-- Senha -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Senha </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="prependedtext" name="senha" class="form-control" placeholder="Senha" required="" type="password" value="<?php echo $dado['senha'] ?>">
                                        </div>
                                    </div>
                                    <!--  CEP  -->
                                    <div class="row">
                                        <label class="col-md-2" for="CEP">CEP*</label>
                                        <div class="col">
                                            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" value="<?php echo $dado['cep'] ?>">
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-success" onclick="pesquisacep(cep.value)">Pesquisar</button>
                                        </div>
                                    </div>
                                    <!-- Rua -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Rua</span>
                                        </div>
                                        <div class="col">
                                            <input id="rua" name="rua" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['rua'] ?>">
                                        </div>
                                    </div>
                                    <!-- Numero -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Nº*</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="num" name="num" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['num'] ?>">
                                        </div>
                                    </div>
                                    <!-- Bairro -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Bairro</span>

                                        </div>
                                        <div class="col-md-10">
                                            <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['bairro'] ?>">
                                        </div>
                                    </div>
                                    <!-- Cidade -->
                                    <div class="row">
                                        <div class="col-md-2    ">
                                            <label>Cidade</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['cidade'] ?>">
                                        </div>
                                    </div>
                                    <!-- Estado -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Estado</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="estado" name="estado" class="form-control" placeholder="" required=""  type="text" value="<?php echo $dado['estado'] ?>">
                                        </div>
                                    </div>
                                    <!-- Situação -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Situação</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select required id="situacao" name="situacao" class="form-control" value="<?php echo $dado['situacao'] ?>">
                                                <option value=""></option>
                                                <option value="1">Ativo</option>
                                                <option value="0">Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- tipo -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Tipo</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select required id="tipo" name="tipo" class="form-control" value="<?php echo $dado['tipo'] ?>">
                                                <option value="<?php echo $dado['tipo'] ?>"></option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Professor</option>
                                                <option value="3">Responsável</option>
                                                <option value="4">Aluno</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Serie -->
                                    <div id="oculto" class="row oculto">
                                        <div class="col-md-2">
                                            <label class="" for="selectbasic">Serie</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select  name="id_serie" class="form-control" value="<?php echo $dado['id_serie'] ?>">
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
                                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Alterar</button>
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
