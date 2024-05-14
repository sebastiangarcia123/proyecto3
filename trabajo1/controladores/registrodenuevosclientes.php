<?php

require "../config/conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha = $_POST["fecha"];
$enteraste = $_POST["enteraste"];
$gusta = $_POST["gusta"];
$rango = $_POST["edad"];

$sql_insertar = "INSERT INTO registro
(fecha_sys, nombre, apellido, fecha_nacimiento, como_te_enteraste_de_nosotros, le_gusta_suscribirse_a_canales, rango_de_edad) 
VALUES (now(), '".$nombre."', '".$apellido."', '".$fecha."', '".$enteraste."', '".$gusta."', '".$rango."')";

if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente";
}else
{
    echo "error registrando la informacion";
}
?>
