<?php

$usuario = $_POST ["usuario"];//traigo un dato de html y lo guardo en una var,
//le pongo el nombre del INPUT

$contrasenia = $_POST ["pass"];

//verificar el valor de la contraseña
$ckusuario = "admin";
$ckpass = 1234;

//hago la validacion
if($usuario == $ckusuario & $contrasenia == $ckpass){
    //echo("Correcto");
        // Redireccionar a la página de YouTube
    header("Location: productosadmin.php");
    exit(); 
}else{
    header("location:./error.html");
    exit(); 
}


?>