<?php
include "conexion.php"

$tiquete = $_POST['tiquete'];
$bruto = $_POST['bruto'];
$tara = $_POST['tara'];
$neto = $_POST['neto'];
$empaques = $_POST['bultos'];


//falta crear la sentencia para ingresar datos

$resultado = $conexion->query($crear);


if($resultado){
    header("location:calidad.php");
}


else{
    header("location:Error.php");
}

$empaques = "bultos";
$disabled = "granel";
if($empaques == "bultos"){
    $disabled = "disabled";
}
echo "<input type='text' $disabled> "

?>