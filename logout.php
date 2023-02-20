<?php
session_start();
if(isset($_SESSION['email'])){
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}else{
    header('Location: index.php');
}