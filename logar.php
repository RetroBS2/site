<?php
include_once('config.php');
session_start();
if((isset($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true))
{
    header('Location: index.php');
}
if (!isset($_SESSION['email'])) {
  if (isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))) {
    if (isset($_POST['submit'])) {
      $email = addslashes($_POST['email']);
      $senha = addslashes($_POST['senha']);

      $sql = "SELECT * FROM usuario where email='$email' and senha='$senha'";
      $result = $conexao->query($sql);
      while ($usualog = mysqli_fetch_assoc($result)) {
        $nome = $usualog['nome'];
        $id = $usualog['id'];
      }
      if ($result->num_rows > 0) {
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
      } else {
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $_SESSION['erro'] = 'Login inválido';
        header('Location: login.php');
      }
    }
  }
}
