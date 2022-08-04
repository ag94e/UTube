<?php
session_start();
if (!isset($_SESSION["matricula"])) {
    header("location: ../UTube");
}
include '../model/upload_video_model.php';

$obj = new upload_file();
$name_video         = $_FILES['file']['name'];
$type               = $_FILES['file']['type'];
$file_temp          = $_FILES['file']['tmp_name'];
$file_size          = $_FILES['file']['size'];
$description_video  = $_POST['description'];
$id_user            = $_POST['user'];

if ($file_size > 0){
    $carpeta_usuario = 'videos/'.$id_user;
    if (!file_exists($carpeta_usuario)){
        mkdir($carpeta_usuario, 0777, true);
    }elseif(file_exists($carpeta_usuario.'/'.$name_video)){
        exit(json_encode([
            "mensaje" => "Ya has subido este archivo anteriormente, intenta con otro o cambia su nombre."
            ]));
    }
    $explode = explode('.', $name_video);
    $type_file = array_pop($explode);
    $rutaFinal = $carpeta_usuario . '/' . $name_video;
    
    if (move_uploaded_file($file_temp, $rutaFinal)){
        $resultado = $obj->upload_file($name_video, $description_video, $rutaFinal, $type_file, $id_user);
        $mensaje = json_encode($resultado);
        exit($mensaje);
    }
} else {
    exit(json_encode([
    "mensaje" => "Hubo un error subiendo este archivo, verifica que sea correcto."
    ]));
}
?>