<?php 
use ExplosaoCultural\Helpers\Utils;
use ExplosaoCultural\Services\EventoServico;
require_once "../vendor/autoload.php"; 

$eventoServico = new EventoServico(); 
$mensagemDeErro = "";
try { 
  $listaDeEventos = $eventoServico->listarTodos();
  $quantidade = count($listaDeEventos);

} catch (Throwable $erro) { 
  Utils::registrarErro($erro); 
  $mensagemDeErro =  "Erro ao listar eventos";
  ;
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Explosão Cultural</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
  <header class="bg-black p-3">
    <div class="container d-flex justify-content-between align-items-center">
      <h1 class="m-0"><a href="index.php" class="text-light text-decoration-none">Explosão Cultural</a></h1>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" id="menuBtn" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menuNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="generos.php">Gêneros</a></li>
              <li class="nav-item"><a class="nav-link" href="enderecos.php">Endereços</a></li>
              <li class="nav-item"><a class="nav-link" href="usuarios.php">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <section class="container py-5">
    <h2 class="text-white mb-4">Eventos em Destaque</h2>

    <div id="carouselEventos" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Fazer um for each para listar todos -->
        <div class="carousel-item active">
          <div class="d-flex gap-3">
            <div class="card bg-secondary text-light" style="min-width: 300px;">
              <img src="https://source.unsplash.com/400x250/?music" class="card-img-top" alt="Evento 1">
              <div class="card-body">
                <h5 class="card-title">Show Indie</h5>
                <p class="card-text">Dia 10 de Junho - Centro Cultural</p>
              </div>
            </div>

            <div class="card bg-secondary text-light" style="min-width: 300px;">
              <img src="https://source.unsplash.com/400x250/?party" class="card-img-top" alt="Evento 2">
              <div class="card-body">
                <h5 class="card-title">Festa Black</h5>
                <p class="card-text">Dia 15 de Julho - Arena Norte</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-flex gap-3">
            <div class="card bg-secondary text-light" style="min-width: 300px;">
              <img src="https://source.unsplash.com/400x250/?exhibition" class="card-img-top" alt="Evento 3">
              <div class="card-body">
                <h5 class="card-title">Expo Arte Urbana</h5>
                <p class="card-text">De 5 a 20 de Julho - Galeria Sul</p>
              </div>
            </div>

            <div class="card bg-secondary text-light" style="min-width: 300px;">
              <img src="https://source.unsplash.com/400x250/?dj" class="card-img-top" alt="Evento 4">
              <div class="card-body">
                <h5 class="card-title">Noite Eletrônica</h5>
                <p class="card-text">Dia 25 de Julho - Club 303</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselEventos" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>


  <main class="container py-5">
    <section class="text-center mb-5">
      <h2 class="display-5 fw-bold">Eventos únicos</h2>
      <p class="lead">Shows, festas e experiências culturais em destaque</p>
    </section>



    <section class="row g-4">
      <div class="col-md-4">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?concert" class="card-img-top" alt="Show">
          <div class="card-body">
            <h5 class="card-title">Festival Indie</h5>
            <p class="card-text">Música ao vivo e artistas nacionais. Dia 20 de Julho.</p>
          </div>
        </div>
      </div>

      <!-- mudou -->
<div class="col-md-4">
  <div class="card bg-secondary text-light h-100 post" data-bs-toggle="modal" data-bs-target="#postModal">
    <img src="https://source.unsplash.com/400x250/?dance,party" class="card-img-top" alt="Festa">
    <div class="card-body">
      <h5 class="card-title">Baile Black</h5>
      <p class="card-text">A noite mais dançante do mês. Dia 12 de Agosto.</p>
    </div>
  </div>
</div>

      <!-- Modal -->
      <div class="modal" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Detalhes do Evento</h5>
        <button type="button" class="btn-close fechar-modal" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p>Mais informações sobre o Baile Black...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fechar-modal" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

      <div class="col-md-4">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?art,exhibition" class="card-img-top" alt="Exposição">
          <div class="card-body">
            <h5 class="card-title">Arte Urbana</h5>
            <p class="card-text">Exposição de grafite e arte de rua. De 5 a 15 de Setembro.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?dance,party" class="card-img-top" alt="Festa">
          <div class="card-body">
            <h5 class="card-title">Baile Black</h5>
            <p class="card-text">A noite mais dançante do mês. Dia 12 de Agosto.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?dance,party" class="card-img-top" alt="Festa">
          <div class="card-body">
            <h5 class="card-title">Baile Black</h5>
            <p class="card-text">A noite mais dançante do mês. Dia 12 de Agosto.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?art,exhibition" class="card-img-top" alt="Exposição">
          <div class="card-body">
            <h5 class="card-title">Arte Urbana</h5>
            <p class="card-text">Exposição de grafite e arte de rua. De 5 a 15 de Setembro.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-black text-center py-3">
    <p class="m-0">Explosão Cultural — Empresa fictícia crianda por Maycon e Lucas &copy; </p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/menu.js"></script>
</body>

</html>