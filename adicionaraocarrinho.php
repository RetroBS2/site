<!-- '$codigoPedido', '$usuarioID', '$codigoProduto', '$nomeProduto', now() -->

<?php
session_start();
include_once('config.php');
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
} else {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $id = '#' . $id;
        $escolhido = "SELECT * FROM catalogo WHERE codproduto='$id'";
        $result = $conexao->query($escolhido);
        $result = mysqli_fetch_assoc($result);
        $adicionar = true;
        $i = 0;
        $pos = 0;
        if (!isset($_SESSION['pedido'])) {
            $_SESSION['pedido'] = array();
        }
        if (!isset($_SESSION['codpedido'])) {
            $_SESSION['codpedido'] = uniqid();
        }
        
        foreach ($_SESSION['pedido'] as $pedido) {
            if ($pedido['codproduto'] == $id) {    
                $adicionar = false;
                $pos = $i;
            }
            $i++;
        }
       if($adicionar){
            $pedido = array(
                'codproduto' => $result['codproduto'],
                'nomeproduto' => $result['nomeproduto'],
                'preco' => $result['preco'],
                'caminho' => $result['caminho'],
                'quantidade' => 1
            );
            $_SESSION['pedido'][] = $pedido;
        }else{
            $_SESSION['pedido'][$pos]['quantidade'] += 1;
        }
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