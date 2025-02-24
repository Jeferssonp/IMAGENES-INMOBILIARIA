<!-- https://www.youtube.com/watch?v=qB3X0olSugo -->
<?php

var_dump($_POST);
/* include '../js/validar.js';  */

$message = '';


if (!empty($_POST["btn"])) {

    include('./configuracion/database.php');
    echo '<br><br>';





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
    $foto = $_POST['FOTO'];
    $video = $_POST['VIDEO'];


    /*Fin*/



    $Consulta = "INSERT INTO publicaciones (INMUEBLE,TIPO,NOMBRE,DEPARTAMENTO,CIUDAD,BARRIO,DIRECCION,TELEFONO,PRECIO,DESCRIPCION, FOTO, VIDEO) VALUES ('$inmueble','$tipo','$nombre','$departamento','$ciudad','$barrio','$direccion','$telefono','$precio','$descripcion','$descripcion','$foto','$video')";



    $query_mysql = mysqli_query($con, $Consulta);


    var_dump($query_mysql);

    mysqli_close($con);
}



?>


<?php if (!empty($message)) : ?>
    <p><?= $message ?></p>
<?php endif; ?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Imaginacion inmobiliaria </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <!-- Informacion como oficina correo y telefono -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Nuestra oficina</h6>
                        <span> Bogotá, Calle 28, COLOMBIA
                            <br> villavicencio Carrera 15, Colombia </br>

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Correo electronico</h6>
                        <span>imaginacioninmobiliaria@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Llámanos</h6>
                        <span>+57 3189998763</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->









    <!-- Navbar Start -->
    <!-- el incio de la pagina -->
    <div class="container-fluid sticky-top bg-dark  shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark  navbar-dark py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>IMAGENES-INMOBILIARIA</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Acerca de nosotros</a>



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Servicio al cliente</a>
                            <a href="#" class="dropdown-item">Informacion</a>
                            <a href="#" class="dropdown-item">Contactenos</a <a href="#" class="dropdown-item">Quejas y reclamos</a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publicaciones</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Arriendo</a>
                            <a href="./Publicacion/Nueva_publicacion.php" class="dropdown-item">Ventas</a>
                            <a href="#" class="dropdown-item">Vacacional</a>
                        </div>
                    </div>
                    <a href="./Registros_e_ingreso/cerrar_sesion.php" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">cerrar sesion<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form method="post" action="" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="text-center header">
                                <h1><span class="text-primary">Publicar</span></h1>
                            </legend>

                            <div class="form-group">
                                <div class="form-control">
                                    <input name="NOMBRE" type="text" placeholder="Título de la publicacion" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="form-control">
                                    <input name="PRECIO" type="text" placeholder="Precio" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <label for="tipoP" class="control-label"></label>
                                <select class="form-control" name="INMUEBLE" required>
                                    <option value="En venta">venta</option>
                                    <option value="En arriendo">arriendo</option>
                                    <option value="En arriendo">Vacacional</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="control-label">
                                    <input name="TELEFONO" type="text" placeholder="Numero de contacto" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="control-label">
                                    <textarea class="form-control" id="descripcionP" name="DESCRIPCION" placeholder="Descripción del inmueble" rows="7" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Direccion -->
                                <label for="street1_id" class="control-label">Dirección</label>
                                <input type="text" class="form-control" name="DIRECCION" placeholder="Calle 27 #28-111" required>
                            </div>

                            <div class="form-group">
                                <!-- Tipo de inmueble -->
                                <label for="dire2P" class="control-label">Tipo de Inmueble</label>
                                <select class="form-control" name="TIPO" required>
                                    <option value="Casa">Casa</option>
                                    <option value="Finca">Finca</option>
                                    <option value="Lote">Lote</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Apartaestudio">Apartaestudio</option>
                                    <option value="Local">Local</option>
                                    <option value="Oficina">Oficina</option>
                                    <option value="Bodega">Bodega</option>
                                    <option value="Edificio de apartamentos">Edificio de apartamentos</option>
                                    <option value="Edificio de oficinas">Edificio de oficinas</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <!-- Departamento -->
                                <label for="state_id" class="control-label">Departamento</label required>
                                <select class="form-control" name="DEPARTAMENTO">
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Antioquia">Antioquia</option>
                                    <option value="Arauca">Arauca</option>
                                    <option value="Atlántico">Atlántico</option>
                                    <option value="Bolívar">Bolívar</option>
                                    <option value="Boyacá">Boyacá</option>
                                    <option value="Caldas">Caldas</option>
                                    <option value="Caquetá ">Caquetá</option>
                                    <option value="Casanare">Casanare</option>
                                    <option value="cauca">cauca</option>
                                    <option value="Cesar">Cesar</option>
                                    <option value="Chocó">Chocó</option>
                                    <option value="Córdoba">Córdoba</option>
                                    <option value="Cundinamarca">Cundinamarca</option>
                                    <option value="Guainía">Guainía</option>
                                    <option value="Guaviare">Guaviare</option>
                                    <option value="Huila">Huila</option>
                                    <option value="La guajira">La guajira</option>
                                    <option value="Magdalena">Magdalena</option>
                                    <option value="Meta">Meta</option>
                                    <option value="Nariño">Nariño</option>
                                    <option value="Norte de santander">Norte de santander</option>
                                    <option value="Putumayo">Putumayo</option>
                                    <option value="Quindío">Quindío</option>
                                    <option value="Risaralda">Risaralda</option>
                                    <option value="San andrés y providencia">San andrés y providencia</option>
                                    <option value="Santander">Santander</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tolima">Tolima</option>
                                    <option value="Valle del cauca">Valle del cauca</option>
                                    <option value="Vaupés">Vaupés</option>
                                    <option value="Vichada">Vichada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <!-- Ciudad-->
                                <label for="city_id" class="control-label">Ciudad</label>
                                <input type="text" class="form-control" name="CIUDAD" placeholder="Bogotá" required>
                            </div>


                            <div class="form-group">
                                <!-- Ciudad-->
                                <label for="city_id" class="control-label">Barrio</label>
                                <input type="text" class="form-control" name="BARRIO" placeholder="Caracoli" required>
                            </div>
                            <!-- Codigo postal-->
                            <!-- <div class="form-group">
                                
                                <label for="zip_id" class="control-label">Codigo postal</label>
                                <input type="text" class="form-control" name="postalP" placeholder="000000" required>
                            </div> -->

                            <!-- <form action="formulario.php" method="post" enctype="multipart/form-data">
                                <b><h3>Selecciona las imagenes que deseas subir </b></h3> <br>
                                <input type="file" name="imagenes">     
                            </form>-->

                </div>
                </fieldset>
                <!--  <label>Ingresa imagen</label>
                <input type="file" id=imagenesfile accept="image/jpeg, image/jpg, image/gif, image/png" name="FOTO" multiple="">
                <input type="file" id=imagenesfile accept="image/jpeg, image/jpg, image/gif, image/png" name="VIDEO" multiple=""> -->





                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    Ingresar imagen: <input name="FOTO" type="file" size="150" maxlength="150">

                    <br><br>




                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        Ingresar video: <input name="VIDEO" type="file" size="150" maxlength="150">






                        <!-- <input type="file" id="videofile" accept="video/*" name="VIDEO"> -->
                        <br><br>
                        <button class="mt-auto btn btn-primary btn-sm" type="submit" name="btn" id=btntoblob>AGREGAR PUBLICACIÓN</button>
                    </form>
                </form>
                </form>

            </div>
        </div>
    </div>
    </div>



























    <!-- Footer Start -->
    <!-- informate envia correo y no se que  -->
    <div class="footer container-fluid position-relative bg-dark  text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>COL-INMUEBLES</h1>
                </a>
                <p>TRABAJAMOS PARA PRESTAR SERVICIOS DE MEDIACIÓN, ASESORAMIENTO Y GESTIÓN EN TRANSACCIONES INMOBILIARIAS..</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>Bogotá, Calle 28,Colombia </p>
                <p><i class="fa fa-map-marker-alt me-2"></i> villavicencio Carrera 15, cOLOMBIA</p>
                <p><i class="fa fa-phone-alt me-2"></i>+57 3189998763</p>
                <p><i class="fa fa-envelope me-2"></i>COL-INMUEBLESINFO@gmail.com</p>
                <p><i class="fa fa-envelope me-2"></i>imaginacioninmobiliaria@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Links populares</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Inicio</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Acerca de nosotros</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Nuestros servicios</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Publicaciones</a>

                    </div>
                </div>
                <div class="col-sm-12">
                    <h4 class="text-white text-uppercase mb-4">INFÓRMATE</h4>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 20px 30px;" placeholder="Correo electronico"><button class="btn btn-primary px-4">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">COL-INMOBILIARIA</a>. Todos los derechos reservados.</p>
            </div>
            <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
                <p class="mb-0">Desarrollador <a class="text-dark" href="#">Alejandro Gutierrez</a></p>
                <p class="mb-0">Desarrollador <a class="text-dark" href="#">Jefersson Pinzon</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="./js/base64.js" type="module"></script>
</body>

</html>