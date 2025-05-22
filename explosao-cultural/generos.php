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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  generos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href=""></a> </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="usuarios.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="CriarEvento.php">Crie seu evento</a></li>

              
              <div class="position-relative">
                <form autocomplete="off" class="d-flex" action="resultados.php" method="POST" onsubmit="return false" id="form-busca">
                  <input id="campo-busca" name="busca" class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Pesquise aqui">
                </form>
                <!-- Div manipulada pelo busca.js -->
                <div id="resultados" class="mt-3 position-absolute container bg-white shadow-lg p-3 rounded"></div>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>



  <main class="container py-5">
    <section class="text-center mb-5">
      <h2 class="display-5 fw-bold">Descubra eventos únicos</h2>
    </section>

    <!-- Cards de eventos -->
    <section class="row g-4">
      <div class="col-md-4 evento" data-genero="musica">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?concert" class="card-img-top" alt="Show">
          <div class="card-body">
            <h5 class="card-title">Festival Indie</h5>
            <p class="card-text">Música ao vivo e artistas nacionais. Dia 20 de Julho.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 evento" data-genero="danca">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?dance,party" class="card-img-top" alt="Festa">
          <div class="card-body">
            <h5 class="card-title">Baile Black</h5>
            <p class="card-text">A noite mais dançante do mês. Dia 12 de Agosto.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 evento" data-genero="arte">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?art,exhibition" class="card-img-top" alt="Exposição">
          <div class="card-body">
            <h5 class="card-title">Arte Urbana</h5>
            <p class="card-text">Exposição de grafite e arte de rua. De 5 a 15 de Setembro.</p>
          </div>
        </div>
      </div>

      <!-- Outros exemplos repetidos para teste -->
      <div class="col-md-4 evento" data-genero="danca">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?dance" class="card-img-top" alt="Festa">
          <div class="card-body">
            <h5 class="card-title">Noite Latina</h5>
            <p class="card-text">Ritmos latinos e muita dança. Dia 25 de Julho.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 evento" data-genero="musica">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?band" class="card-img-top" alt="Banda">
          <div class="card-body">
            <h5 class="card-title">Rock no Parque</h5>
            <p class="card-text">Bandas de rock alternativo ao ar livre. Dia 30 de Julho.</p>
          </div>
        </div>
      </div>


      <div class="col-md-4 evento" data-genero="musica">
        <div class="card bg-secondary text-light h-100">
          <img src="https://source.unsplash.com/400x250/?band" class="card-img-top" alt="Banda">
          <div class="card-body">
            <h5 class="card-title">Rock no Parque</h5>
            <p class="card-text">Bandas de rock alternativo ao ar livre. Dia 30 de Julho.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-black text-center py-3">
    <p class="m-0">Explosão Cultural — Empresa fictícia criada por Maycon e Lucas &copy;</p>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/buscar.js"></script>
  <script src="js/menu.js"></script>
</body>

</html>