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
        <form action="fazerpedido.php" method="POST">
            <fieldset>
                <legend>Registro</legend>
                <div class="inputBox">   
                    <label class="labelInput">Codigo Produto:</label>
                    <input type="text" name="codigoProduto" id="email" class="inputUser">
                </div>
                <br><br><br>
                <div class="inputBox">    
                    <label class="labelInput">Nome Produto:</label>
                    <input type="text" name="nomeProduto" id="senha" class="inputUser">
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

<!-- 
    codigoPedido
    usuarioID
    codigoProduto
    nomeProduto
    data
 -->