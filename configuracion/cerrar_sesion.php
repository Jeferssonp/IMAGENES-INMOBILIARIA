<!-- conexion con el cierre de sesion index -->

<?php
session_start();
session_destroy();
header("location:../index.html");


?>