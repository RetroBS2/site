<?php
session_start()
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
  <link rel="stylesheet" href="css/home.css">
  
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark cabecalho">
    <a href="index.php" class="navbar-brand titulo">Pancia Piena</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto p-2">

        <li class="nav-item active">
          <a href="index.php" class="nav-link">Home</a>
        </li>

        <li class="nav-item">
          <a href="catalogo.php" class="nav-link">Catalogo</a>
        </li>

        <li class="nav-item">
          <a href="pedido.php" class="nav-link">Pedido</a>
        </li>



        <?php if (!isset($_SESSION['email'])) : ?>
          <li class="nav-item">
            <a href="registro.php" class="nav-link">
              <small>Registrar</small>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add nav-item" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
              </svg>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <small>Entrar</small>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right nav-item" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
              </svg>
            </a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="pedidosregistrado.php" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill nav-item" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>

              <small><?= $_SESSION['nome'] ?></small>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <small>Sair</small>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left nav-item " viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
              </svg>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
  <main>
  <h2>Seja Bem Vindo</h2>
  <section class="about">
  <div class="image">
    <img src="img/banner3.png" alt="Foto do Restaurante">
  </div>
  <div class="text">
    <h2>Sobre N??s</h2>
    <p>Nosso restaurante italiano ?? uma mistura de tradi????o e inova????o. N??s nos inspiramos na cozinha italiana cl??ssica, mas tamb??m estamos sempre buscando novas maneiras de surpreender nossos clientes. Nosso ambiente acolhedor e nossa equipe amig??vel tornam o jantar em nosso restaurante uma experi??ncia inesquec??vel.</p>
  </div>
</section>

<section class="menu">
  <h2>Menu</h2>
  <p>Confira nosso menu de pratos italianos cl??ssicos e novas cria????es:</p>
  <ul>
    <li>
      <strong>Lasanha</strong>
      <p>Uma deliciosa camada de massa fresca com carne mo??da, molho de tomate caseiro e queijo derretido por cima.</p>
    </li>
    <li>
      <strong>Ravioli</strong>
      <p>Deliciosos past??is recheados com ricota, espinafre e temperos, servidos com molho de tomate caseiro.</p>
    </li>
    <li>
      <strong>Risoto</strong>
      <p>Um cl??ssico italiano feito com arroz arb??reo cremoso, queijo parmes??o e cogumelos frescos.</p>
    </li>
    <li>
      <strong>Espaguete</strong>
      <p>Uma massa longa e fina, servida com o molho de tomate mais saboroso que voc?? j?? experimentou, e finalizado com queijo ralado.</p>
    </li>
    <li>
      <strong>Arancino</strong>
      <p>Bolinhos de arroz crocantes e dourados, recheados com queijo mozzarella derretido e servidos com molho marinara.</p>
    </li>
  </ul>
  
</section>
<div class="gallery">
    <img src="img/banner1.png" alt="Imagem 1">
    <img src="img/banner2.png" alt="Imagem 2">
    <img src="img/banner3.png" alt="Imagem 3">
  </div>

  </main>
  <footer>
    <div class="container-fluid fixed-bottom rodape">
      <div class="row">
        <div class="col-12 text-center p-3">
          <?= 'Pancia Piena (1.0.0) &copy;' . date('Y') ?>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>