<?php
    session_start();
    include_once('config.php');
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
} else {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $id = '#' . $id;
        $i = 0;
        $pos = 0;
        
        foreach ($_SESSION['pedido'] as $pedido) {
            if ($pedido['codproduto'] == $id) {    
                $pos = $i;
            }
            $i++;
        }
        unset($_SESSION['pedido'][$pos]);
        $_SESSION['pedido'] = array_values($_SESSION['pedido']);
        if(count($_SESSION['pedido']) === 0){
            unset($_SESSION['pedido']);
            unset($_SESSION['codpedido']);
        }
        header('Location: pedido.php');
    } else{
        header('Location: index.php');
    }
}