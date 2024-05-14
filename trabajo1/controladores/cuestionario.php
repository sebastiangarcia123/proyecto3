<?php

require "../config/conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo_docu = $_POST["tipo"];
$n°_docu = $_POST["documento"];
$servicio = $_POST["servicios"];
$zona = $_POST["zona"];
$nom_contacto = $_POST["contacto"];
$n°_contacto = $_POST["numero"];

$sql_insertar = "INSERT INTO cuestionario 
(fecha_sys, nombre, apellido, tipo_docu, n°_docu, servicio, zona, nom_contacto, n°_contacto) 
VALUES (now(), '".$nombre."', '".$apellido."', '".$tipo_docu."', '".$n°_docu."', '".$servicio."', '".$zona."', '".$nom_contacto."', '".$n°_contacto."')";

if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente";
}else
{
    echo "error registrando la informacion";
}
?>