<?php 
include 'conexion.php';

class upload_file{
    private $db;

    public function __construct(){
        $this->db = conexion::conn();
    }

    public function upload_file($name_video, $description_video, $url, $type, $id_user){
        $resultado = $this->db->query("INSERT INTO videos (name_video, description_video, `url`, `type`, id_user) 
                                        VALUES ('$name_video', '$description_video', '$url', '$type', '$id_user')");
        if ($resultado != 1) {
            $respuesta = "El archivo no se ha subido correctamente, verifique el archivo.";
        }else{
            $respuesta = "¡El archivo se ha subido correctamente!";
        }
        return array(
            "respuesta" => $respuesta
        );
    }
}

?>
