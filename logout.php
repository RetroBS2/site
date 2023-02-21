<?php
session_start();
if(isset($_SESSION['email'])){
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['pedido']);
    unset($_SESSION['codpedido']);
    header('Location: login.php');
}else{
    header('Location: index.php');
}