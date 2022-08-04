<?php 
session_start();
include '../model/model_login.php';

$obj = new login();
$user = $_POST['matricula'];
$password = $_POST['password'];
$result = $obj->login($user,$password);

if(empty($result)){
    $status = 0;
    exit(json_encode(["result" => $status]));
}else{
    $status = 1;
    foreach($result as $r){
        $user = $r['name'];
        $user_last_name = $r['last_name1'];
        $user_last_name2 = $r['last_name2'];
        $matricula = $r['id_number'];
        $rol = $r['rol'];
        $id = $r['id'];
    }
    $_SESSION["name"] = $user;
    $_SESSION["matricula"] = $matricula;
    $_SESSION["rol"] = $rol;
    $_SESSION['id'] = $id;

    exit(json_encode([
        "result" => $status,
        "user" => $user
    ]));
}
?>