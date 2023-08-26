<?php

//variables para establecer conexión a base de datos mediante servidor xampp

$servidor = "localhost";
$usuario = "root";
$clave = "";
$db = "formato";


// crear conexión

$conexion = new mysqli($servidor, $usuario, $clave, $db);

if($conexion){
    echo "conexion establecida";
}
else{
    echo "Error: no se pudo conectar";
}

?>