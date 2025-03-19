<?php
if($_SERVER["REQUEST_METHOD"]== "POST") {
    $nombre=filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $mensaje=filter_var($_POST['mensaje'],FILTER_SANITIZE_STRING);

    if(empty($nombre) || empty($email) || empty($mensaje)) {
        echo"¡¡Todos los campos son obligatorios!!";
    }else if (!filter_var($email,FILTER_SANITIZE_EMAIL)){
        echo"El correo electronico no es valido";
    }else{
        echo"Formulario enviado con exito"
    }
}
?>

