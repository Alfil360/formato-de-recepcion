<?php
    // header('Access-Control-Allow-Origin: *');//Permite el acceso desde cualquier dominio
    // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");//Para personalizar ciertos encabezados 
    // header("Content-Type: text/html; charset=utf-8");//asegura que el navegador interprete correctamente el contenido HTML que se envía desde el servidor
    // $method = $_SERVER['REQUEST_METHOD'];//para obtener el método HTTP de la solicitud que se está procesando

    // Incluye session_start() al comienzo del archivo
    session_start();

    // Se incluye conexión a la base de datos
    include "conexion.php";

    $usu = $_POST['Nusuario'];
    $clave = $_POST['pass'];

    // Consulta a la base de datos un usuario registrado y obtiene el tipo de funcionario
    $consulta = "SELECT usuario_id, rol FROM usuarios WHERE usuario = '".$usu."' AND clave = '".$clave."'";

    

    $resultado = $conexion->query($consulta);

    $numreg = $resultado->num_rows;

    if ($numreg == 1) {
        // Obtiene el tipo de funcionario desde el resultado de la consulta
        $fila = $resultado->fetch_assoc();
        $tipoFuncionario = $fila['rol'];
        $user_id = $fila['usuario_id'];

        // Almacena el ID del usuario en una variable de sesión
        $_SESSION['user_id'] = $user_id;

        // Redirige a la página correspondiente al tipo de funcionario
        switch ($tipoFuncionario) {
            case 'recepcion':
                header("location:../recepcion.php");
                break;
            case 'bascula':
                header("location:../bascula.php");
                break;
            case 'laboratorio':
                header("location:../laboratorio.php");
                break;
            case 'administrador':
                header("location:../admiMenu.php");
                break;
            default:
                header("location:../Error.php");
                break;
        }
    } else {
        header("location:../Error.php");
    }
?>
