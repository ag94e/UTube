<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>UTube</title>
  </head>
  <body>
  <header>
  <nav class="navbar bg-dark">
    <div class="container-fluid">
      <a href="#" class="UTcolor navbar-brand d-flex align-items-center">
        <img src="../assets/UTubeLogo.png" width="35" height="35" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></img>
        <strong>UTube</strong>
      </a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Mi Canal</h1>
          <a href="#" class="btn btn-primary my-2">Personalizar Canal</a>
          <a href="#" class="btn btn-secondary my-2">Administrar Videos</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <video src="Desarrollo Movil.mp4" controls autoplay></video> 
            <div class="card-body">
              <h4 class="card-text">Desarrollo Movil</h4>
              <p>Lenguajes para desarrollo Movil</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video src="Calculo Diferencial.mp4" controls autoplay></video> 
            <div class="card-body">
              <h5 class="card-text">Calculo Diferencial</h5>
              <p>Limites y Derivadas</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video src="Desarrollo Web Progresiva.mp4" controls autoplay></video>
            <div class="card-body">
              <H6 class="card-text">Desarrollo Web Progresiva</H6>
              <P>Conceptos clave de las PWA</P>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <video src="Creacion De videojuegos.mp4" controls autoplay></video>
            <div class="card-body">
              <H7 class="card-text"> </H7>
              <p>Proceso de creacion de un video juego</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video src="Desarrollo y Gestion de Software.mp4" controls autoplay></video>
            <div class="card-body">
              <H8 class="card-text"> </H8>
              <p>Modelos de proceso de Software</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video src="Inglés.mp4" controls autoplay></video>
            <div class="card-body">
              <H9 class="card-text"> </H9>
              <p>Tag Questions</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <video src="Bases de datos.mp4" controls autoplay></video>
            <div class="card-body">
              <H10 class="card-text"> </H10>
              <p>Big Data</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video src="Programacion Orientada a objetos.mp4" controls autoplay></video>
            <div class="card-body">
              <H11 class="card-text"> </H11>
              <p>¿Qué es la programacion orientada a objetos?</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video src="Redes.mp4" controls autoplay></video>
            <div class="card-body">
              <H12 class="card-text"> </H12>
              <p>¿Qué son las redes?</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descargar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
