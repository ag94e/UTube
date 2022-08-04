<?php
include 'conexion.php';

class home{
    private $db;
    private $lista = array();

    public function __construct(){
        $this->db = conexion::conn();
    }

    public function show_videos(){
        $resultado = $this->db->query("SELECT * FROM videos;");
        while($fila = mysqli_fetch_array($resultado)){
            $this->lista[] = array(
                "id" => $fila["id"],
                "name_video" => $fila["name_video"],
                "description_video" => $fila["description_video"],
                "url" => $fila["url"],
                "type" => $fila["type"],
                "id_user" => $fila["id_user"],
            );
        }
        return $this->lista;
    }
}

?>
