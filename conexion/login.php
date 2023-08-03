<?php
// Se incluye conexión a la base de datos
include "conexion.php";

$usu = $_POST['Nusuario'];
$clave = $_POST['pass'];

//consulta a la base de datos un usuario registrado


$consulta = "SELECT * FROM funcionario WHERE usuario= '".$usu."' AND contraseña ='".$clave."'";
//echo $consulta;

$resultado =$conexion->query($consulta);

$numreg = $resultado->num_rows;

if($numreg == 1){
    header("location:../recepcion.php");
}


else{
    header("location:../Error.php");
}


?>