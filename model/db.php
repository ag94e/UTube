<?php
    class conexion {
        public static function conn() {
            $link = mysqli_connect("localhost", "root", "", "utube");
            $link -> set_charset("utf8");
            return $link;
        }
    }
?>