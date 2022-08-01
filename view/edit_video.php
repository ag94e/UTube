<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Video name</title>
</head>
<body>
<nav class="navbar fixed-top bg-dark">
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

<section style="padding-top: 5em;">
    <div class="row">
        <div class="offset-3 col-6">
            <div class="col-12">
                <div class="card shadow-sm">
                    <video src="Desarrollo Movil.mp4" controls autoplay></video> 
                    <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-text">
                            <input type="text" placeholder="Desarrollo Movil">
                        </h4>
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/forma-de-usuario.png" alt="user image" style="height: 25px; width: 25px;" class="">
                            </div>
                            <p style="font-size: 13px;">
                                <a href="./profile.php">Dionisio Huerta</a> 
                            </p>
                        </div>
                    </div>
                    <p>
                        <input type="text" placeholder="Lenguajes para desarrollo Movil">    
                    </p>
                    <div class="d-flex justify-content-end align-items-center">
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
            <br>
</section>