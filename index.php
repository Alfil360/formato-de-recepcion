<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <img src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" alt="foto de perfil">
    <p>Por favor, ingrese su usuario y contraseña</p>

        <form action="./conexion/login.php" method="POST">
            <input type="text" name="Nusuario" id="" placeholder="Ingrese usuario" required="">
            <input type="password" name="pass" id="" placeholder="Contraseña" required="">
            <input type="submit" name="" id="" value="Iniciar Sesión">
        </form>
    
</body>
</html>