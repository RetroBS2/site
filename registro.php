<?php
include_once('config.php');
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];

    $sql = "SELECT * FROM usuario where email='$email'";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('Email já existente')</script>";
    } else {
        if ($senha != $confsenha) {
            echo "<script>alert('As senhas não são compatíveis')</script>";
        } else {
            $sql = "INSERT INTO usuario VALUE (DEFAULT, '$nome', '$email', '$senha', '$endereco')";
            $result = $conexao->query($sql);
            header('Location: login.php');
        }
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Pancia Piena</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark cabecalho">
        <a href="" class="navbar-brand titulo">Pancia Piena</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto p-2">

                <li class="nav-item active">
                    <a href="#" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Catalogo</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Pedido</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row my-4">
            <div class="col-sm-6 offset-sm-3 registro">
                <form action="registro.php" method="POST">
                        <h3 class="tituloRegistro">REGISTRO</h3>
                     
                        <div class="my-3">
                            <label class="labelText" for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control inputForm" required>
                        </div>

                        <div class="my-3">
                            <label class="labelText" for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-control inputForm" required>
                        </div>
                    
                        <div class="my-3">
                            <label class="labelText" for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control inputForm" required>
                        </div>
                    
                        <div class="my-3">
                            <label class="labelText" for="Senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control inputForm" required>
                        </div>
                    
                        <div class="my-3">
                            <label class="labelText" for="confsenha">Confirme a Senha:</label>
                            <input type="password" name="confsenha" id="confsenha" class="form-control inputForm" required>
                        </div>
                    
                        <div class="my-3">
                            <input type="submit" value="Registre-se" name="submit" class="botao">
                        </div>
                    
                </form>

            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid fixed-bottom rodape">
            <div class="row">
                <div class="col-12 text-center p-3">
                    <?= 'Pancia Piena (1.0.0) &copy;' . date('Y') ?>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>