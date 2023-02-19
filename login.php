<?php 
    include_once('config.php');
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha'])))
    {
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuario where email='$email' and senha='$senha'";
        $result = $conexao->query($sql);
        while($usualog = mysqli_fetch_assoc($result))
        {    
            $nome = $usualog['nome'];
            $id = $usualog['id'];
        }
        if($result->num_rows > 0){
            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

        } else {
            echo "<script>alert('Não tem')</script>";
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
        <form action="login.php" method="POST">
            <fieldset>
                <legend>Login</legend>
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
                    <input type="submit" value="Registre-se" name="submit" id="submit">
                </div>
            </fieldset>
        </form>

    </div>
</body>
</html>