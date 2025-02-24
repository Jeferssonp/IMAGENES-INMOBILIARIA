<!-- Hace conexion con inicio de sesion -->

<?php
session_start();
include 'database.php';
$CORREO = $_POST['Correo'];
$CONTRASENA = $_POST['Contrasena'];
/* se deben utilizar en vachar 150 cararteres para utilizar hash */
$CONTRASENA = hash('sha512', $CONTRASENA);

/* echo $CONTRASEÑA;
die(); */

$VALIDAR_LOGIN = mysqli_query($con, "SELECT * FROM usuarios WHERE Correo='$CORREO' AND Contrasena='$CONTRASENA' ");


if (mysqli_num_rows($VALIDAR_LOGIN) > 0) {
    $_SESSION['usuario'] = $CORREO;
    header("location:../");
    exit;
} else {

    echo '
    <script> 
    alert("Usuario no existe por favor verifique los datos introducidos");
    window.location = "../Registros_e_ingreso/iniciodesesion.php";
    </script>
    ';
    exit;
}








?>