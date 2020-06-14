<?php
include "menuPrincipal.php";
require_once '../controllers/connect.php';
require_once '../system/session.php';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.3.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../system/js/form.js" type="text/javascript"></script>
    <script src="../system/js/divs.js" type="text/javascript"></script>
    <script src="../system/js/funcoes.js" type="text/javascript"></script>
    <title>Cadastro de Turmas</title>

</head>
<body>
    <div id="container_geral" class="container-fluid">
        <form class="container-fluid" action="../controllers/controllerUsuarios.php" method="POST">
            <!-- Botão para abrir Modal Turmas -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUsuarios">
                Cadastrar Turmas
            </button>
            <!-- O Modal -->
            <div class="modal $modal-fade-transform: scale(.8)" id="modalUsuarios">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <!-- Modal Header -->

                        <div class="modal-header bg-primary text-center text-white ">
                            <a class="navbar-brand" href="#">
                                <img src="../img/logo_limpa_sombra_300X300px.png" alt="Logo" style="width:40px;">
                            </a>
                            <h4 class="modal-title">Cadastro de Usuários</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p class="table-sm  text-right">Todos os campos são obrigatórios</p>

                            <div class="container">
                                <!-- nome -->
                                <div class="row">
                                    <div class="col col-md-2">
                                        <label>Letra </label>
                                    </div>
                                    <div class="col col-md-10">
                                        <input id="letra" name="letra" placeholder="" class="form-control input-md" required="" type="text">
                                    </div>
                                </div>
                                
    <!-- Tabela Notas-->
    <div id="tabela" class="container-fluid">
        <?php
        $rs = $pdo->prepare("SELECT * FROM usuarios");
        $rs->execute();
        ?>

        <div class="container-fluid">
            <table class="table  table-hover table-sm" align="center" >
                <thead class="titulo table-warning"><th colspan="10">Lista de Usuários</th></thead>
                <thead class="thead ">
                <th class="">Codigo</th>
                <th class="">Letra</th>
                <th class="">Sobrenome</th>
                <th class="">Telefone</th>
                <th class="">E-mail</th>
                <th class="">Tipo</th>
                <th class="">Situação</th>
                </thead>
                <hr>
                <tbody>
                    <?php while ($usuario = $rs->fetch(PDO::FETCH_ASSOC)) { ?>       
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nome']; ?></td>
                            <td><?php echo $usuario['sobrenome']; ?></td>
                            <td><?php echo $usuario['telefone']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php
                                switch ($usuario['tipo']) {
                                    case 1:
                                        echo 'Administrador';

                                        break;
                                    case 2:
                                        echo 'Professor';

                                        break;
                                    case 3:
                                        echo 'Responsável';

                                        break;
                                    case 4:
                                        echo 'Aluno';

                                        break;
                                    case 5:
                                        echo 'Secretaria(o)';

                                        break;

                                    default:
                                        break;
                                }
                                ?></td>
                            <td><?php
                                if ($usuario['situacao'] == 1) {
                                    echo "Ativo";
                                } else {
                                    echo 'Inativo';
                                }
                                ?></td>

                            <td><a href="formAltUsuarios.php?id=<?php echo $usuario['id']; ?>" class="img-circle">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        Alterar
                                    </button>
                                    <a></td>
                                        <td><?php
                                            if ($usuario['situacao']== 1):?><a href="javascript:func()" onclick="inativar(<?php echo $usuario['id']; ?>)">
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    Inativar
                                                </button>
                                            </a>
                                        <?php else: ?>
                                            <a href="javascript:func()" onclick="ativar(<?php echo $usuario['id']; ?>)">
                                                <button type="button" class="btn btn-warning btn-sm">
                                                     Ativar 
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                        </td>
                                        <td><a href="detalhesUsuarios.php?id=<?php echo $usuario['id']; ?>">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    Ver Detalhes
                                                </button>
                                                <a></td>

                                                    </tr>  

<?php } ?>

                                                </tbody>
                                                </table><br><br><br>
                                                </div>    

                                                <?php
                                                require './rodape.php';
                                                ?>
                                                </body>
                                                </html>
