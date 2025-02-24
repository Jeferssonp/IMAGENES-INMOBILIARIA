<!-- Conecta con el about y about2 -->

<?php

include('./configuracion/database.php');


$user_message = $_POST['usuario_message'];
$email_message = $_POST['email_message'];
$cont_message = $_POST['cont_message'];

$query = "INSERT INTO mensaje(user_message, email_message, cont_message) VALUES ('$user_message', '$email_message', '$cont_message')";
$result = mysqli_query($con, $query);

header("Location: index.php");
