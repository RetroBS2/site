<?php 
    include_once('config.php');
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confsenha = $_POST['confsenha'];
        
        $sql = "SELECT * FROM usuario where email='$email'";
        $result = $conexao->query($sql);
        if($result->num_rows > 0){
            echo "<script>alert('Email já existente')</script>";
            header('Location: registro.php');
        } else {
            if($senha != $confsenha){
                echo "<script>alert('As senhas não são conpativeis')</script>";
            } else{
                $sql = "INSERT INTO usuario VALUE (DEFAULT, '$nome', '$email', '$senha')";
            }
        }
        
    } else{
        unset($_POST['nome']);
        unset($_POST['email']);
        unset($_POST['senha']);
        unset($_POST['confsenha']);     
        header('Location: index.php');
    }
?>