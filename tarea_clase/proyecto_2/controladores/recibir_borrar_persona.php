<script src="../js/sweetalert2@10.js"></script>
.
<?php
//paso 1 importar la liberia  //
require "../confip/conexion.php";

//paso 2 almacenar las variables//
$codigo =  $_POST["txt_codigo"];

//paso 3 armar el sql en una variable//
$sql_insertar = "DELETE FROM pago WHERE cod= ".$codigo."";

//paso 4 enviar a la BD
if($dbh->query($sql_insertar))
{
    echo '<script>
    Swal.fire({
      title: "¡borrando!",
      text: "PERSONA BORRADA CORRECTAMENTE",
      icon: "success",
      showConfirmButton: false
    });
    setTimeout(function(){
      window.location.href = "../borrar_usuario.html";
    }, 3000); // Redirecciona después de 3 segundos
  </script>';
}else
{
    echo "error borrando la persona";
}
?>