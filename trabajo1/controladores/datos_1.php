<?php
require "../config/conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["correo"];
$email_personal = $_POST["correopersonal"];
$n°_docu = $_POST["documento"];
$n°_cel = $_POST["telefono"];

$sql_insertar = "INSERT INTO datos
(fecha_sys, nombre, apellido, correo_institucional, correo_personal, documento, telefono) 
VALUES (now(), '".$nombre."', '".$apellido."', '".$email."', '".$email_personal."', '".$n°_docu."', '".$n°_cel."')";


if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente";
}else
{
    echo "error registrando la informacion";
}
?>