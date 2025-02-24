<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>WEBUILD - Construction Company Website Template Free</title>
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
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>


<body>



    <?php


    /* var_dump($_POST); */


    $message = '';


    if (!empty($_POST["Nombre"])) {

        include('database.php');
        echo '<br><br>';





        $NOMBRE = $_POST["Nombre"];
        $APELLIDO = $_POST["Apellido"];
        $CELULAR = $_POST["Celular"];
        $CORREO = $_POST["Correo"];
        $CONTRASEÑA = $_POST['Contraseña'];
        $CONTRASEÑA = hash('sha512', $CONTRASEÑA);
        $CONFIRMAR_CONTRASEÑA = password_hash($_POST["Confirmar_contraseña"], PASSWORD_BCRYPT);

        $Consulta = "INSERT INTO usuarios (Nombre, Apellido, Celular, Correo, Contraseña, Confirmar_contraseña) Values ('$NOMBRE','$APELLIDO',$CELULAR,'$CORREO','$CONTRASEÑA','$CONFIRMAR_CONTRASEÑA') ";

        $query_mysql = mysqli_query($con, $Consulta);


        /* var_dump($query_mysql); */

        mysqli_close($con);
    }



    ?>


    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>


    <h1> registrarse</h1>























    <form action="" method="post">
        <div class="col-lg-8">
            <div class="bg-light text-center p-5">
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Nombre" name="Nombre" style="height: 55px;">
                        </div>


                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Apellido" name="Apellido" style="height: 55px;">
                        </div>



                        <div class="col-12 col-sm-6">
                            <input type="number" class="form-control border-0" placeholder="Celular" name="Celular" style="height: 55px;">
                        </div>





                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" placeholder="Correo electronico" name="Correo" style="height: 55px;">
                        </div>



                        <div class="col-12 col-sm-6">
                            <input type="password" class="form-control border-0" name="Contraseña" placeholder="contraseña nueva" style="height: 55px;">
                        </div>

                        <div class="col-12 col-sm-6">
                            <input type="password" class="form-control border-0" placeholder="confirmar tu contraseña" name="Confirmar_contraseña" style="height: 55px;">
                        </div>







                        <div class="col-12 col-sm-6">
                            <h6>fecha de nacimiento</h6>
                            <input type="date" class="form-control border-0 " placeholder="Fecha de nacimiento " name="" style="height: 55px;">
                        </div>










                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Ingresar</button>
                        </div>
                        <div class="col-12">
                            <a href="Inicio_de_sesion.php" class="btn btn-primary w-100 py-3" type="submit">Regresar</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>



    </form>






































    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>











if(expresiones.Nombre.test(e.target.value)){
document.getElementById('grupo__Nombre').classList.remove('formulario__grupo-incorrecto');
document.getElementById('grupo__Nombre').classList.add('formulario__grupo-correcto');
document.querySelector('#grupo__Nombre i').classList.add('fa-check');
document.querySelector('#grupo__Nombre i').classList.remove('fa-times-circle');
document.querySelector('#grupo__Nombre .formulario__input-error').classList.remove('formulario__input-error-activo');
}else {
document.getElementById('grupo__Nombre').classList.add('formulario__grupo-incorrecto');
document.getElementById('grupo__Nombre').classList.remove('formulario__grupo-correcto');
document.querySelector('#grupo__Nombre i').classList.add('fa-times-circle');
document.querySelector('#grupo__Nombre i').classList.remove('fa-check');
document.querySelector('#grupo__Nombre .formulario__input-error').classList.add('formulario__input-error-activo');
}




error_reporting(0); /*Ocultar errores*/