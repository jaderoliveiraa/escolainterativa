<?php
require 'controllers/connect.php';
session_start();
if(isset($_POST['email']) && empty($_POST['email']) == false){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']); 
}
if(isset($_SESSION['email'])){
    header("location:views/inicial.php"); 
}
?>
<html>
    <head>
        <script src="system/js/bootstrap.js" type="text/javascript"></script>
        
        <link href="system/css/estiloMenu.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        
        
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Formulário de Login -->
    <form name="valida_login" action="controllers/valida_login.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="exemplo@exemplo.com" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
      <input type="password" id="login" class="fadeIn third" name="senha" placeholder="Senha" required="required">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Relembrar senha -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueçeu sua Senha?</a>
    </div>

  </div>
</div>
    </body>
</html>
