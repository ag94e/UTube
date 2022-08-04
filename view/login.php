<?php
session_start();
if (isset($_SESSION['name'])){
  header("Location: home_view");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <title>Login</title>
</head>

<body>
    <section class="container-fluid">
        <div class="row d-flex align-items-center" style="height: 400px;">
            <div class="col-xl-6 col-12 d-flex justify-content-center align-items-center">
                <img src="assets/img/img-1.jpeg" alt="UTube Logo">
            </div>
            <div class="col-xl-6 col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center align-items-center mt-1">
                            <img class="img-user user-icon" src="assets/img/forma-de-usuario.png" alt="icono usuario">
                        </div>
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <h1 class="mt-1">Ingresar</h1>
                            </div>
                            <div class="d-flex justify-content-center">
                                <form id="formulary">
                                    <div class="mb-4">
                                        <label for="matricula" class="form-label font-weig-bold" >Matricula</label>
                                        <input type="text" class="form-control" placeholder="Ingresar tu matricula" name="matricula" id="matricula">
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label font-weig-bold" >Contraseña</label>
                                        <input type="password" class="form-control mb-2" placeholder="Ingresar tu contraseña" name="password" id="password">
                                    </div>
                                    <button type="button" class="btn btn-primary w-100" onclick="login_UTube()">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/login.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

