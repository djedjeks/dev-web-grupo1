<?php
  $aMenu = ['Home','Weliton', 'Contato', 'Etc'];
  $pagina = empty($_GET['pg']) ? 'Home' : $_GET['pg'];
  $bg = 'bg-dark';
  $sHtml = '
    <main role="main" class="inner">
      <div class="jumbotron text-center bg-dark">
        <h1 class="display-4">Eai Professor! Está é a Homepage</h1>
        <p class="lead">Essa é uma pagina simples de apresentação com o framework Bootstrap 4.5 e PHP</p>
        <hr class="my-4">
        <p>O Bootstrap é relativamente interessante e PHP, bom, tô quase lá</p>
        <button type="button " class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
          Clica ai...
        </button>
      </div>
    </main>

    <section class="container bg-dark">
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-3 shadow-sm" style="max-width: 540px; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Essa é uma Card dhra</h5>
              <p class="card-text">Eu ia colocar umas imagens minhas aqui, pro prof ver como sou bonito, mas sei lá,
                vamos ficar por isso mesmo.</p>
              <p class="card-text"><small class="text-muted">Feito agora pouco.vlw flw</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-3 shadow-sm" style="max-width: 540px; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Outra Card dhra</h5>
              <p class="card-text">O sol tá lindo lá fora, disse os japa, pois aqui tá escuro hehehe.</p>
              <p class="card-text"><small class="text-muted">Feito agora pouco.vlw flw</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  ';
  if ($pagina == 'Weliton') {
    $sHtml = '
      <main role="main" class="inner">
        <div class="jumbotron text-center bg-success">
          <h1 class="display-4">Oi! eu sou o Weliton!</h1>
          <p class="lead">Eu sou um cara criativo (eu acho_, gosto de brincar com as possibilidades que o desenvolvimento me dá</p>
          <hr class="my-4">
          <p>Quem sabe um dia eu não me torne um Desenvolvedor foda, né?</p>
        </div>
      </main>
    ';
    $bg = 'bg-success';
  }
  if ($pagina == 'Contato') {
    $sHtml = '
      <main role="main" class="inner">
        <div class="jumbotron text-center bg-info">
          <h1 class="display-4">A Seguir temos um formulário muito bem feito</h1>
          <p class="lead">Completissimo</p>
          <hr class="my-4">
          <p>Copiado do Bootstrap rsrs</p>
        </div>
      </main>

      <form class="container">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Bairro</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Rua</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Estado</label>
            <select id="inputState" class="form-control">
              <option selected>Liquído</option>
              <option>Gasoso</option>
              <option>Sólido</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">CEP</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check sem nexo
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-outline-dark">Enviar alguma coisa...</button>
      </form>
    ';
    $bg = 'bg-info';
  }
  if ($pagina == 'Etc') {
    $sHtml = '
      <main role="main" class="inner">
        <div class="jumbotron text-center bg-warning">
          <h1 class="display-4">Poh, imagine algo legal aqui</h1>
          <p class="lead">Tipo todo um sistema ERP e tal</p>
          <hr class="my-4">
          <a href="www.google.com.br">Acesse aqui um site muito FODA</a>
        </div>
      </main>
    ';
    $bg = 'bg-warning';
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="/nav-bar-style.css" rel="stylesheet">
</head>

<body class="<?=$bg?>">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Dev Web
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-egg-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M14 10a6 6 0 0 1-12 0C2 5.686 5 0 8 0s6 5.686 6 10z" />
          </svg>
        </h3>
        <nav class="nav nav-masthead justify-content-center">
          <?php foreach($aMenu as $Menu) {
            if ($pagina == 'Home'){
              echo sprintf('<a class="nav-link text-light" href="?pg=%1$s">%1$s</a>', $Menu);
            } else {
              echo sprintf('<a class="nav-link text-dark" href="?pg=%1$s">%1$s</a>', $Menu);
            }
          } ?>
        </nav>
      </div>
    </header>

    <?php echo $sHtml ?>

    </section>

    <footer class="text-center mt-auto">
      <p>Feito com amor por Weliton Lisboa
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-sunglasses" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path fill-rule="evenodd"
            d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM6.5 6.497V6.5h-1c0-.568.447-.947.862-1.154C6.807 5.123 7.387 5 8 5s1.193.123 1.638.346c.415.207.862.586.862 1.154h-1v-.003l-.003-.01a.213.213 0 0 0-.036-.053.86.86 0 0 0-.27-.194C8.91 6.1 8.49 6 8 6c-.491 0-.912.1-1.19.24a.86.86 0 0 0-.271.194.213.213 0 0 0-.036.054l-.003.01z" />
          <path
            d="M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM9 5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-2-2V5z" />
        </svg>
      </p>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Uau você abriu um Modal!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Tudo certo prof?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" onclick="alert('Bah! Uma gelada ajuda')" data-dismiss="modal">Não</button>
            <button type="button" class="btn btn-outline-success" onclick="alert('Showw')" data-dismiss="modal">Siiiim!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>