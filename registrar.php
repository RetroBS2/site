<?php
session_start();
if((isset($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true))
{
    header('Location: index.php');
}
include_once('config.php');
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];

    $sql = "SELECT * FROM usuario where email='$email'";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['err'] = 'Email já existe';
        header('Location: registro.php');
    } else {
        if ($senha != $confsenha) {
            $_SESSION['err'] = 'As senhas não confere';
            header('Location: registro.php');
        } else {
            $sql = "INSERT INTO usuario VALUE (DEFAULT, '$nome', '$email', '$senha', '$endereco')";
            $result = $conexao->query($sql);
            header('Location: login.php');
        }
    }
}
?>