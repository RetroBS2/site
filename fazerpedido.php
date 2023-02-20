<?php
session_start();
include_once('config.php');
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

    $sql = "INSERT INTO pedido VALUE ('$codigoPedido', '$usuarioID', '$codigoProduto', '$nomeProduto', now())";
    $conexao->query($sql);
    $_SESSION['confirmar'] = 'Pedido registrado com sucesso!';
    header('Location: pedido.php');
}

?>

<!-- 
    codigoPedido
    usuarioID
    codigoProduto
    nomeProduto
    data
 -->