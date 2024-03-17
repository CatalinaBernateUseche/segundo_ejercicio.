<?php
require "../config/conexion.php";
$celular = $_POST["celular"];
$pin = $_POST["pin"];
$valor_pagar = $_POST["valor_pagar"];
$clave = "995511"; 
if ($pin == $clave){
    $sql = "INSERT INTO valor_pagar(celular, valor_pagar, pin, fecha_sys) VALUES ('".$celular."', '".$valor_pagar."', '".$pin."', now())";
   if($conexion->query($sql))
   {
    echo "Aprobado";
   }
} else {
    echo "HA CADUCADO";
}


?>