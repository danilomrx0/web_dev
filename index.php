
<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title>Teste - Tela de cadastro</title>
  </head>
  <body>
      <h1>Cadastrar usuário</h1>
      <?php
      if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
       ?>
      <form class="" action="processa.php" method="post">
          <label >Nome: </label>
          <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>

          <label >Email: </label>
          <input type="email" name="email" placeholder="Digite seu email"><br><br>

          <input type="submit" name="" value="Cadastrar">

      </form>
  </body>
</html>
