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
        } else {
            if($senha != $confsenha){
                echo "<script>alert('As senhas não são compatíveis')</script>";
            } else{
                $sql = "INSERT INTO usuario VALUE (DEFAULT, '$nome', '$email', '$senha')";
                $result = $conexao->query($sql);
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login">    
        <form action="registro.php" method="POST">
            <fieldset>
                <legend>Registro</legend>
                <br><br>
                <div class="inputBox">    
                    <label class="labelInput" for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="inputUser">
                </div>
                <br><br><br>
                <div class="inputBox">   
                    <label class="labelInput" for="email">Email:</label>
                    <input type="email" name="email" id="email" class="inputUser">
                </div>
                <br><br><br>
                <div class="inputBox">    
                    <label class="labelInput" for="Senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="inputUser">
                </div>
                <br><br><br>
                <div class="inputBox">    
                    <label class="labelInput" for="Senha">Confirme a Senha:</label>
                    <input type="password" name="confsenha" id="confsenha" class="inputUser">
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input type="submit" value="Registre-se" name="submit" id="submit">
                </div>
            </fieldset>
        </form>

    </div>
</body>
</html>