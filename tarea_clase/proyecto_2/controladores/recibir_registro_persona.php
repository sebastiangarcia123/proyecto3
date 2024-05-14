<?php
//paso 1 importar la liberia  //
require "../confip/conexion.php";

//paso 2 almacenar las variables//
$nombre = $_POST["nombre"];
$documen = $_POST["documento"];
$fecha = $_POST["fecha"];
$telefono = $_POST["celular"];
$sexo = $_POST["sexo"];

//paso 3 armar el sql en una variable//
$sql_insertar = "INSERT INTO personas
(fecha_sys, nombre, documento, fecha_nacimiento, celular, sexo) 
VALUES (now(),'".$nombre."','".$documen."','".$fecha."','".$telefono."', ".$sexo.")";

//paso 4 enviar a la BD
if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente";
}else
{
    echo "error registrando la informacion";
}
?>