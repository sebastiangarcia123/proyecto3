<script src="../js/sweetalert2@10.js"></script>
.
<?php
//paso 1 importar la liberia  //
require "../confip/conexion.php";

//paso 2 almacenar las variables//

$valor = $_POST["txt_valor"];
$valor_restante = $_POST["txt_valor_restante"];
$codigo =  $_POST["txt_codigo"];

//paso 3 armar el sql en una variable//
$sql_insertar = "UPDATE pago SET valor_pagado=".$valor." , valor_restante=".$valor_restante." WHERE cod=".$codigo." ";

//paso 4 enviar a la BD
if($dbh->query($sql_insertar))
{
    echo '<script>
    Swal.fire({
      title: "¡actualizando!",
      text: "actualizando correctamente",
      icon: "success",
      showConfirmButton: false
    });
    setTimeout(function(){
      window.location.href = "../actualizacion_pagos.html";
    }, 3000); // Redirecciona después de 3 segundos
  </script>';
}else
{
    echo 'error a la actualizacion de pago';
}
?>