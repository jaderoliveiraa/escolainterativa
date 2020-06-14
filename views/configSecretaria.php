<?php 
require_once '../controllers/connect.php';
require '../system/session.php';
require_once './menuPrincipal.php';
require_once './rodape.php';

$sql = "SELECT * FROM instituicao";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
} else {
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
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
                                <h4 class="modal-title">Dados da instituição</h4>
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
                                    <!-- CNPJ -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>CNPJ </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="cnpj" name="cnpj" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $dado['cnpj'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- Endereço -->
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <label>Endereço </label>
                                        </div>
                                        <div class="col col-md-10">
                                            <input id="endereco" name="endereco"  class="form-control input-sm"  type="text" maxlength="10"  value="<?php echo $dado['endereco'] ?>" readonly>
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
                                    <!-- website -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Site</span>
                                        </div>
                                        <div class="col">
                                            <input id="site" name="site" class="form-control" type="text" value="<?php echo $dado['website'] ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- responsável -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Responsável</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="responsavel" name="responsavel" class="form-control"  type="text" value="<?php echo $dado['responsavel'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span class="input-group-addon">Situação</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="responsavel" name="responsavel" class="form-control"  type="text" value="<?php
                                            $situacao=$dado['situacao'];
                                            if($situacao == 1){
                                                echo "Ativa"; 
                                            }else{
                                                echo "Inativa - Por favor regularize sua situação";
                                            }
                                            ?>" readonly>
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
