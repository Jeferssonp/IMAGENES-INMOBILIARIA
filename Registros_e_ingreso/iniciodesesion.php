<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login y registro</title>
  <meta charset="utf-8" />
  <title>Imaginacion inmobiliaria</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!--  enlace de google font  -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="../img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet" />


</head>

<body class="Iniciodesesion">


  <!-- el incio de la pagina -->
  <div class="container-fluid sticky-top bg-dark  shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark  navbar-dark py-3 py-lg-0">
      <a href="../index.html" class="navbar-brand">
        <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>IMAGENES-INMOBILIARIA</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="../index.html" class="nav-item nav-link active">Inicio</a>
          <a href="../about.html" class="nav-item nav-link">Acerca de nosotros</a>





          <a href="../index.html" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Regresar<i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
  <main class="main">





    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>ya tienes una cuenta</h3>
          <p>Iniciar sesion pra entrar en la pagina</p>
          <button id="btn__iniciar-sesion">iniciar sesion</button>
        </div>

        <div class="caja__trasera-register">
          <h3>ya tienes una cuenta</h3>
          <p>registra para que puedas iniciar sesion</p>
          <button id="btn__registrarse">registrase</button>
        </div>
      </div>

      <!-- Formulario de login y registro -->


      <!-- Ingreso -->

      <div class="contenedor__login-register">
        <form action="../configuracion/validar.php" method="post" class="formulario__login">
          <h2>Iniciar sesion</h2>
          <input type="text" placeholder="Correo electronico" name="Correo" />
          <input type="password" placeholder="Contraseña" name="Contrasena" />
          <button>Ingresar</button>
          <a href="#">¿Has olvidado la contraseña?</a>

        </form>









        <!-- registro -->

        <?php

        var_dump($_POST);
        /* include '../js/validar.js';   */

        $message = '';


        if (!empty($_POST["Nombre"])) {

          include('../configuracion/database.php');
          echo '<br><br>';




          /* $ID = $_POST[Id]; */
          $NOMBRE = $_POST["Nombre"];
          $CELULAR = $_POST["Celular"];
          $CORREO = $_POST["Correo"];
          $CONTRASENA = $_POST['Contrasena'];
          $CONTRASENA = hash('sha512', $CONTRASENA);
          $CONFIRMAR_CONTRASENA = $_POST["Confirmar_contrasena"];
          $CONFIRMAR_CONTRASENA = hash('sha512', $CONFIRMAR_CONTRASENA);
          $FECHA_NACIMIENTO = $_POST["Fecha_nacimiento"];
          /*Convertir o modificarla fecha */
          $originalDate = $FECHA_NACIMIENTO;
          $timestamp = strtotime($originalDate);
          $newdate = date("m-d-y", $timestamp);

          /*Fin*/

          /* $Consulta = "INSERT INTO usuarios (Id , Nombre, Celular, Correo, Contrasena, Confirmar_contrasena, Fecha_nacimiento) Values (NULL,'$NOMBRE',$CELULAR,'$CORREO','$CONTRASENA','$CONFIRMAR_CONTRASENA', '$FECHA_NACIMIENTO') "; */
          $Consulta = "INSERT INTO usuarios (Nombre, Celular, Correo, Contrasena, Confirmar_contrasena, Fecha_nacimiento) Values ('$NOMBRE',$CELULAR,'$CORREO','$CONTRASENA','$CONFIRMAR_CONTRASENA', '$FECHA_NACIMIENTO') ";

          /*           INSERT INTO `usuarios` (`Id`, `Nombre`, `Celular`, `Correo`, `Contrasena`, `Confirmar_contrasena`, `Fecha_nacimiento`) VALUES (NULL, 'JEFER', '3212086779', 'JEFER@gmail.COM', '123456', '123456', '2022-08-09'); */

          $query_mysql = mysqli_query($con, $Consulta);


          var_dump($query_mysql);

          mysqli_close($con);
        }



        ?>


        <?php if (!empty($message)) : ?>
          <p><?= $message ?></p>
        <?php endif; ?>





        <!-- Esto es una prueba para configurar la pagina -->
        <form action="" method="post" class="formulario__register formulario" id="formulario">
          <h2>Registrarse</h2>


          <div class="formulario__grupo" id="grupo__Nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
              <input class="formulario__input" id="Nombre" type="text" placeholder="Pepito perez" name="Nombre">
              <i class="formulario__validacion-estado fa-solid fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El Nombre tiene que ser de 4 a 25 digitos y solo puede contener letras</p></input>
          </div>


          <div class="formulario__grupo" id="grupo__Celular">
            <label for="Celular" class="formulario__label">Telefono/Celular</label>
            <div class="formulario__grupo-input">
              <input class="formulario__input" id="Celular" type="text" placeholder="321-234-5670" name="Celular">
              <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
            </div>
            <p class="formulario__input-error">Solo puede contener numeros y el maximo son 14 digitos.</p>
          </div>



          <div class="formulario__grupo" id="grupo__Correo">
            <label for="Correo" class="formulario__label">Correo electronico</label>
            <div class="formulario__grupo-input">
              <input class="formulario__input" id="Correo" type="email" placeholder="Correo@gmail.com" name="Correo">
              <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, Numeros, Puntos Y guion bajo. </p>
          </div>


          <div class="formulario__grupo" id="grupo__Contrasena">
            <label for="Contrasena" class="formulario__label">Contraseña</label>
            <div class="formulario__grupo-input">
              <input class="formulario__input" id="Contrasena" type="password" placeholder="" name="Contrasena">
              <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 digitos.</p>
          </div>
          


          <div class="formulario__grupo" id="grupo__Confirmar_contrasena">
            <label for="Confirmar_contrasena" class="formulario__label">Confirmar contraseña</label>
            <div class="formulario__grupo-input">
              <input class="formulario__input" id="Confirmar_contrasena" type="password" placeholder="" name="Confirmar_contrasena">
              <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
            </div>
            <p class="formulario__input-error">Ambas contraseñas debe ser iguales.</p>
          </div>


          <div class="formulario__grupo" id="grupo__Fecha_nacimiento">
            <label for="Fecha_nacimiento" class="formulario__label">Fecha de nacimiento </label>
            <div class="formulario__grupo-input">
              <input class="formulario__input" id="Fecha_nacimiento" type="date" placeholder="Fecha de nacimiento " name="Fecha_nacimiento">
              <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
            </div>
            <p class="formulario__input-error">Por favor inserte su fecha de nacimiento</p>
          </div>






          <!-- TERMINO Y CONDICIONES -->
          <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
              <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
              Acepto los terminos y condiciones
            </label>
          </div>


          <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fa-solid fa-triangle-exclamation"></i><b>Error:</B>Por favor completar todos los datos solicitados</p>
          </div>

          <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Registrarse</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>

          </div>



        </form>
      </div>
    </div>
  </main>

  <script src="../js/validar.js"></script>
  <script src="../js/scrip.js"></script>



</body>

</html> 