<?php
date_default_timezone_set("America/Bogota");
$fecha_actual=date("y-m-d H:1:s");

?>





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
<br>    villavicencio Carrera 15, Colombia  </br>

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
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Acerca de nosotros</a>


                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Servicio al cliente</a>
                            <a href="#" class="dropdown-item">Informacion</a>
                            <a href="#" class="dropdown-item">Contactenos</a
                             <a href="#" class="dropdown-item">Quejas y reclamos</a>
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
                    <a href="./Registros_e_ingreso/cerrar_sesion.php" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">cerrar sesion<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


</head>




































<div class="row">
    <!--Formulareio de registro-->
    <div class="col 14" style="position: absolute; top: 15%;">   
    <h5 class="blue-text">REGISTRO DE ALUMNOS</h5><br><br>  
        <form action="control.php" method="POST" accept-charset="utf-8">

        <div class="input-field col 15">
        <input type="text" name="fecha" value=<?php echo $fecha_actual?> placeholder="">
        <label for="fecha">Fecha</label>
        </div>

        <div class="input-field col 12">
        <input type="text" name="nombre" placeholder="">
        <label for="nombre">Nombre</label>
        </div>

        <div class="input-field col 12">
        <input type="text" name="apellidos" placeholder="">
        <label for="apellidos">Apellidos</label>
        </div>

        <div class="input-field col 14">
        <input type="text" name="edad" placeholder="">
        <label for="edad">Edad</label>
        </div>

        <div class="input-field col 14">
        <input type="text" name="grado" placeholder="">
        <label for="grado">Grado</label>
        </div>

        <div class="input-field col 14">
        <input type="text" name="turno" placeholder="">
        <label for="turno">Turno</label>
        </div>

        <div class="input-field col 112" >
        <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
        </div>
        </form>






        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




    <!--tabla-->

    <div clas="col 17 offset-15" style="position: absolute; top: 15%;">
    <table class="table">
    <h5 class="blue-text">Lista</h5><br><br>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Registro</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Grado</th>
                <th>Turno</th>
            </tr>
        </thead>
        <?php
        include ("../conexion/conexion.php");
        $sql="SELECT * FROM alumnos";
        $ejecutar=mysqli_query($conexion,$sql);
        while($fila=mysqli_fetch_array($ejecutar))
        {

        


        ?>


        <tbody>
            <tr>
                <td><?php echo $fila[0]?></td>
                <td><?php echo $fila[1]?></td>    
                <td><?php echo $fila[2]?></td>
                <td><?php echo $fila[3]?></td>
                <td><?php echo $fila[4]?></td>
                <td><?php echo $fila[5]?></td>
                <td><?php echo $fila[6]?></td>
                <td><a href="#" class="btn btn-small">Editar</a></td>
            </tr>
            <tr>
        </tbody>

<?php

        }


?>



    </table>




    </div>
</div>
</body>
</html>