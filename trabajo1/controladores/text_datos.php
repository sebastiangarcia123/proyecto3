<?php

require "../config/conexion.php";

$num_identidad = $_POST["numero"];
$tipo_documento = $_POST["tipo"];
$expedida = $_POST["expedida"];
$apellido1 = $_POST["apellido"];
$apellido2 = $_POST["apellido2"];
$nombre = $_POST["nombres"];
$numero_cel = $_POST["telefonico"];
$correo = $_POST["correo"];
$sexo = $_POST["genero"];
$estado_civil = $_POST["civil"];
$fecha_nacimiento = $_POST["fecha"];
$lugar_nacimiento = $_POST["lugar"];
$departamento = $_POST["departamento"];
$municipio = $_POST["municipio"];
$sangre = $_POST["grupo"];
$rh = $_POST["RH"];

$sql_insertar = "INSERT INTO text_datos
(fecha_sys, n°_docu, tipo_docu, expedicion_docu, apellido1, apellido2, nombre, n°_cel, correo_institu, sexo, estado_civil, fecha_nacimi, lugar_nacimi, departamento, municipio, grupo_sanguineo, rh) 
VALUES (now(), '".$num_identidad."', '".$tipo_documento."', '".$expedida."', '".$apellido1."', '".$apellido2."', '".$nombre."', '".$numero_cel."', '".$correo."', '".$sexo."', '".$estado_civil."',
 '".$fecha_nacimiento."', '".$lugar_nacimiento."', '".$departamento."', '".$municipio."', '".$sangre."', '".$rh."')";

if($dbh->query($sql_insertar))
{
    echo "informacion registrada correctamente";
}else
{
    echo "error registrando la informacion";
}
?>