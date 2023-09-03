<?php
// header('Access-Control-Allow-Origin: *');//Permite el acceso desde cualquier dominio
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");//Para personalizar ciertos encabezados 
// header("Content-Type: text/html; charset=utf-8");//asegura que el navegador interprete correctamente el contenido HTML que se envía desde el servidor
// $method = $_SERVER['REQUEST_METHOD'];//para obtener el método HTTP de la solicitud que se está procesando

//variables para establecer conexión a base de datos mediante servidor xampp

$servidor = "localhost";
$usuario = "root";
$clave = "";
$db = "formatorecibo";


// crear conexión

$conexion = new mysqli($servidor, $usuario, $clave, $db);

//comentado porque me causa problemas
// if($conexion){
//     echo "conexion establecida";
// }
// else{
//     echo "Error: no se pudo conectar";
// }

?>