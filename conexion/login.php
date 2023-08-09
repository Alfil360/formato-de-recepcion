<?php
    // Se incluye conexión a la base de datos
    include "conexion.php";

    $usu = $_POST['Nusuario'];
    $clave = $_POST['pass'];

    // Consulta a la base de datos un usuario registrado y obtiene el tipo de funcionario
    $consulta = "SELECT tipofuncionario FROM funcionario WHERE usuario = '".$usu."' AND contraseña = '".$clave."'";

    //echo $consulta;

    $resultado = $conexion->query($consulta);

    $numreg = $resultado->num_rows;

    if ($numreg == 1) {
        // Obtiene el tipo de funcionario desde el resultado de la consulta
        $fila = $resultado->fetch_assoc();
        $tipoFuncionario = $fila['tipofuncionario'];

        // Redirige a la página correspondiente al tipo de funcionario
        switch ($tipoFuncionario) {
            case 'recepcion':
                header("location:../recepcion.php");
                break;
            case 'bascula':
                header("location:../bascula.php");
                break;
            case 'laboratorio':
                header("location:../calidad.php");
                break;
            case 'administrador':
                header("location:../administrador.php");
                break;
            default:
                header("location:../Error.php");
                break;
        }
    } else {
        header("location:../Error.php");
    }
?>
