<?php
session_start();
include("conexao.php");
$nome = (filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
$email = (filter_input (INPUT_POST, 'email', FILTER_SANITIZE_STRING));

//echo "$nome <br>";
//echo "$email";

$result = "INSERT INTO usuarios(nome, email, created) VALUES('$nome', '$email', NOW())";
$result = mysqli_query($conn, $result);

  if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Deu certo, otário!";
    header("Location: index.php");
  }else{
    $_SESSION['msg'] = "Deu merda, otário!";
    header("Location: index.php");
  }
?>
