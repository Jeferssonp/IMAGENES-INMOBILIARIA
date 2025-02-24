<!-- UNION CON BASE DE DATO  -->


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Imaginacion inmobiliaria </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
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
                    <a href="../index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="../about.html" class="nav-item nav-link">Acerca de nosotros</a>



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
                            <a href="./formulario.html" class="dropdown-item">Arriendo</a>
                            <a href="./Publicacion/Nueva_publicacion.php" class="dropdown-item">Ventas</a>
                            <a href="./CRUD.PHP" class="dropdown-item">Vacacional</a>
                        </div>
                    </div>
                    <a href="../index.html" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">cerrar sesion<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>

    <form>
        <div class="container">
            <br>
            <center>
                <h1>Listado de inmuebles</h1>
            </center>
            <br>
            <div class="container">
                <a href="" class="btn-btn-dark">Agregar inmueble</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Inmueble en</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Nombre de inmueble</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Barrio</th>
                            <th scope="col">Descripcin</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Video</th>
                            <th scope="col">Acciones</th>


                        </tr>
                    </thead>
                    <tbody>
                        <!-- Es para que me traiga la informacion de la base de datos -->
                        <?php

                        include "../configuracion/database.php";

                        $sql = "SELECT * FROM publicaciones";
                        $resultado = $con->query($sql);


                        while ($fila = $resultado->fetch_assoc()) { ?>


                            <tr>
                                <th scope="row"><?PHP echo $fila['id_usuarios'] ?></th>
                                <td><?php echo $fila['INMUEBLE']  ?></td>
                                <td><?php echo $fila['TIPO']  ?></td>
                                <td><?php echo $fila['NOMBRE']  ?></td>
                                <td><?php echo $fila['CIUDAD']  ?></td>
                                <td><?php echo $fila['BARRIO']  ?></td>
                                <td><?php echo $fila['DESCRIPCION']  ?></td>
                                <td><?php echo $fila['PRECIO']  ?></td>
                                <td><img style="width: 200px;" src="data:image/jpg;base64, <?php echo base64_encode($fila['FOTO']) ?>" alt=""></td>
                                <td><video style="width: 200px;" src="data:video/mp4;base64, <?php echo base64_decode($fila['VIDEO']) ?>" alt=""></td>
                                <!-- <td> -->
                                <!-- ?php echo $fila['VIDEO'] --> ?
                                <!-- </td> -->

                                <td>
                                    <a href="" class="btn btn warning">Editar</a>
                                    <a href="" class="btn btn-danger">Eliminar</a>
                                </td>




                            </tr>


                    </tbody>
                <?php } ?>

                </table>


            </div>

        </div>
    </form>

    <!-- Navbar End -->

</body>







</html>