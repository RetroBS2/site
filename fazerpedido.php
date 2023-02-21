<?php
session_start();
include_once('config.php');
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
}
if (isset($_POST['submit'])) {
    foreach ($_SESSION['pedido'] as $item) {
        $valor = $item['quantidade'] * $item['preco'];
        $codProduto = $_SESSION['codpedido'];
        $usuarioID = $_SESSION['id'];
        $codigoProduto = $item['codproduto'];
        $nomeProduto = $item['nomeproduto'];
        $Quantidade = $item['quantidade'];
        $preco = $valor;
        $sql = "INSERT INTO pedido VALUE ('$codProduto', '$usuarioID', '$codigoProduto', '$nomeProduto', '$Quantidade', '$preco', now())";
        $conexao->query($sql);
    }
    $_SESSION['confirmar'] = 'Pedido registrado com sucesso!';
    unset($_SESSION['pedido']);
    unset($_SESSION['codpedido']);
    header('Location: pedido.php');
} else {
    header('Location: index.php');
}

?>

<!-- 
    codigoPedido
    usuarioID
    codigoProduto
    nomeProduto
    Quantidade
    preço
    data
 -->