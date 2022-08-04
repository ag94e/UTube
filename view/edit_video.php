<?php
session_start();
if (!isset($_SESSION['name'])){
  header("Location: home_view");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <title>Home</title>
</head>
<body>
<nav class="navbar fixed-top bg-dark">
    <div class="container-fluid">
        <a href="home_view" class="UTcolor navbar-brand d-flex align-items-center">
            <img src="assets/UTubeLogo.png" width="35" height="35" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></img>
            <strong>UTube</strong>
        </a>
        <div>
            <button class="btn btn-danger" onclick="logout_session()">Cerrar sesión</button>
        </div>
    </div>
</nav>

<section style="padding-top: 5em;">
    <div class="d-flex justify-content-center">
        <?php if($_SESSION['rol'] == 2){?> 
            <div class="row">
            <div class="form-control col-6">
                <input class='form-control' type='file' name='video' id='video'>
                <input type="hidden" name="user" id="user" value="<?php echo $_SESSION["id"]; ?>">
                <input type="text" class="form-control" placeholder="Descripcion del video" name='description'>
            </div>
            <div class="col-6">
                <button class="btn btn-success" onclick="upload_video()" formenctype='multipart/form-data'>Subir video</button>
            </div>
            </div>
        <?php }?>
    </div>
    <br>
</section>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/logout.js"></script>
    <script src="js/upload_video.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>