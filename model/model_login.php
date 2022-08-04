<?php
include 'conexion.php';

class login{
    private $db;
    private $list;

    public function __construct(){
        $this->db = conexion::conn();
    }

    public function login($user, $pass){
        $result = $this->db->query("SELECT * FROM users WHERE id_number='$user' AND password='$pass'");
        while($arr = $result->fetch_assoc()){
            $this->list[] = $arr;
        }
        return $this->list;
    }
}

?>
