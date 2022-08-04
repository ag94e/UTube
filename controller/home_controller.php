<?php 
session_start();
if (!isset($_SESSION["matricula"])) {
    header("location: ../UTube");
}
include '../model/home_model.php';

$obj = new home();
$result = $obj->show_videos();
$videos = json_encode($result);
exit($videos);

?>