<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
if(isset($_POST['submit'])){
    $codigoPedido = uniqid();
    $usuarioID = $_SESSION['id'];
    $codigoProduto = $_POST['codigoProduto'];
    $nomeProduto = $_POST['nomeProduto'];
    $data = date('Y/m/d');

    echo $codigoPedido . " " .
    $usuarioID . " " .
    $codigoProduto . " " .
    $nomeProduto . " " .
    $data;
}

?>

<!-- 
    codigoPedido
    usuarioID
    codigoProduto
    nomeProduto
    data
 -->