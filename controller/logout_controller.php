<?php 
session_start();
if (!isset($_SESSION["matricula"])) {
    header("location: ../UTube");
}

session_destroy();

exit(json_encode([
    "status" => "1"
]));

?>