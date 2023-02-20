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
  <link rel="stylesheet" href="css/pedido.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark cabecalho">
    <a href="index.php" class="navbar-brand titulo">Pancia Piena</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto p-2">

        <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
        </li>

        <li class="nav-item">
          <a href="catalogo.php" class="nav-link">Catalogo</a>
        </li>

        <li class="nav-item active">
          <a href="pedido.php" class="nav-link">Pedido</a>
        </li>



        <?php if (!isset($_SESSION['email'])) : ?>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right nav-item icone" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
              </svg>
            </a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill nav-item" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>

              <small><?= $_SESSION['nome'] ?></small>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left nav-item icone " viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
              </svg>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row my-4">
      <div class="col-sm-6 offset-sm-3">
        <h1 class="tituloped">Pedido</h1>
        
        <?php if(isset($_SESSION['pedido'])):?>
        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
                <tr>
                  <th>Imagem</th>
                  <th>Codigo do Produto</th>
                  <th>Nome do Produto</th>
                </tr>
              </thead>
              <tbody>
                
              <?php foreach($_SESSION['pedido'] as $lista):?>
                <tr>
                  <td width="20%"><img src="<?=$lista['caminho']?>" alt="" width="100%"></td>
                  <td><?=$lista['codproduto']?></td>
                  <td><?=$lista['nomeproduto']?></td>
                </tr>
              <?php endforeach;?>
              </tbody>  
        </table>
        <?php else:?>
          <h1>LISTA DE PEDIDO VAZIO :/</h1>
        <?php endif;?>
        
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

<!-- 
    codigoPedido
    usuarioID
    codigoProduto
    nomeProduto
    data
 -->