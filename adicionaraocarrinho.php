<!-- '$codigoPedido', '$usuarioID', '$codigoProduto', '$nomeProduto', now() -->

<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['email'])){
    header('Location: index.php');
} else{
    if(!empty($_GET['id']))
    {
        $id = $_GET['id']; 
        $id = '#' . $id;
        $escolhido = "SELECT * FROM catalogo WHERE codproduto='$id'";
        $result = $conexao->query($escolhido);
        $result = mysqli_fetch_assoc($result);
        if(!isset($_SESSION['pedido'])){
            $_SESSION['pedido'] = array();
        }
        $pedido = array(
            'codproduto' => $result['codproduto'],
            'nomeproduto' => $result['nomeproduto'],
            'preco' => $result['preco'],
            'caminho' => $result['caminho']
        );
        $_SESSION['pedido'][] = $pedido;
        header('Location: pedido.php');
    } else {
        header('Location: index.php');
    }
}

?>

<!--   
Código do Produto | codproduto
Nome do Produto | nomeproduto
Preço | preco
caminho | caminho
 -->