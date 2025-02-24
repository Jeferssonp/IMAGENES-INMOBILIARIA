<!-- Realiza conexion a  Vista_formulario -->


<?php

/* include('./Registros_e_ingreso/database.php');


//Imagenes
if (isset($_POST['btn'])) {
	$bytesfile = file_get_contents($_FILES['img']['tmp_name']);
	$titulo = $_POST['tituloP'];
	$precio = $_POST['precioP'];
	$telefono = $_POST['telP'];
	$descripcion = $_POST['descripcionP'];
	$direccion = $_POST['direP'];
	$direccion2 = $_POST['dire2P'];
	$ciudad = $_POST['ciudadP'];
	$postal = $_POST['postalP'];
	$departamento = $_POST['deparP'];
	$tipo = $_POST['tipoP'];
	$sql = "INSERT INTO publicaciones(imagenes, titulo,precio, telefono, descripcion, direccion, direccion2, ciudad, postal, departamento, tipo) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	$stm = $con->prepare($sql);
	$stm->bind_param('sssissssiss', $bytesfile, $titulo, $precio, $telefono, $descripcion, $direccion, $direccion2, $ciudad, $postal, $departamento, $tipo);
	if($stm->execute()){
		echo "<script type='text/javascript'>alert('PUBLICACION SUBIDA!');</script>";
		header('Location: index.php');
	}
	//i - integer
	//d - double
	//s - string
	//b - BLOB

 }


 */




?>



<?php

/* 
include('./configuracion/database.php'); */


//Imagenes
/* if (isset($_POST['btn'])) {
	$bytesfile = file_get_contents($_FILES['FOTO']['tmp_name']);
	$inmueble = $_POST['INMUEBLE'];
	$tipo = $_POST['TIPO'];
	$nombre = $_POST['NOMBRE'];
	$departamento = $_POST['DEPARTAMENTO'];
	$ciudad = $_POST['CIUDAD'];
	$barrio = $_POST['BARRIO'];
	$direccion = $_POST['DIRECCION'];
	$telefono = $_POST['TELEFONO'];
	$precio = $_POST['PRECIO'];
	$descripcion = $_POST['DESCRIPCION'];
	$video = file_get_contents($_FILES['VIDEO']['tmp_name']); */
/* $video = addslashes(file_get_contents($_FILES['VIDEO']['tmp_name'])); */





/* $sql = "INSERT INTO publicaciones(INMUEBLE,TIPO,NOMBRE,DEPARTAMENTO,CIUDAD,BARRIO,DIRECCION,TELEFONO,PRECIO,DESCRIPCION,FOTO,VIDEO) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
	$stm = $con->prepare($sql);
	$stm->bind_param('sssissssiss',$inmueble, $tipo, $nombre, $departamento, $ciudad, $barrio, $direccion, $telefono, $precio, $descripcion, $bytesfile, $video);
	if ($stm->execute()) {
		echo "<script type='text/javascript'>alert('PUBLICACION SUBIDA!');</script>";
		header('Location: index.php');
	}
 */

//i - integer
//d - double
//s - string
//b - BLOB

/* } */


/* codificar foto y video en base64 */
/* https://parzibyte.me/blog/2019/08/09/php-imagen-base64/#:~:text=Convertir%20imagen%20a%20cadena%20base64,un%20archivo%20o%20simplemente%20mostrarlo. */


<?php
/* include './configuracion/database.php';
if (isset($_POST['btn'])) {
    if (is_uploaded_file($_FILES['FOTO']['tmp_name'])) {


        // creamos las variables para subir a la db
        $ruta = "inmueble_nuevos/";
        $nombrefinal = trim($_FILES['FOTO']['name']); //eliminamos los espacios en blanco
        $nombrefinal = mb_ereg_replace("", "", $nombrefinal); //sustituye una expresion regular
        $upload = $ruta . $nombrefinal;



        if (move_uploaded_file($_FILES['FOTO']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion
            echo "<br>upload exitoso!. datos:</br><br>";
            echo "Nombre: <i> <a href=\"" . $ruta . $_FILES['fichero']['name'] . "\">" . $_FILES['ficheros']['name'] . "</a></i><br>";
            echo "Tipo mime: <i>" . $_FILES['ficheros']['type'] . "</i><br>";
            echo "peso:<i>" . $_FILES['ficheros']['size'] . "bytes</i><br>";
            echo "<br><hr><br>";


            $nombre = $_POST["Nombre"];
            $inmueble = $_POST['INMUEBLE'];
            $tipo = $_POST['TIPO'];
            $nombre = $_POST['NOMBRE'];
            $departamento = $_POST['DEPARTAMENTO'];
            $ciudad = $_POST['CIUDAD'];
            $barrio = $_POST['BARRIO'];
            $direccion = $_POST['DIRECCION'];
            $telefono = $_POST['TELEFONO'];
            $precio = $_POST['PRECIO'];
            $descripcion = $_POST['DESCRIPCION'];


            $query = "INSERT INTO publicaciones(INMUEBLE,TIPO,NOMBRE,DEPARTAMENTO,CIUDAD,BARRIO,DIRECCION,TELEFONO,PRECIO,DESCRIPCION,FOTO,VIDEO) 
            VALUES ('$inmueble','$tipo','$nombre','$departamento','$ciudad','$barrio','$direccion','$telefono','$precio','$descripcion','$descripcion','" . $_FILES['fichero']['FOTO'] . "','" . $_FILES['fichero']['size'] . "')";
            mysql_query($query) or die(mysql_error());
            echo "el archivo'" . $nombre . "'se ha subido con exito <br>";
        }
    }
}
 */


?>