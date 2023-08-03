<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
        <header>
            <div class="imagenLogo">
            <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/13077/windmill-clipart-md.png" alt="logo molino">
            </div>

            <div class="headerText">
            <h2>Ingreso de materia prima. Recepción</h2>
            </div>

        </header>
        <nav>
            <ul>
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Nuevo Formato</a>
                </li>
            </ul>

        </nav>

            <form action="bascula.php" method="POST">
                <input type="text" name="Pro" id="" placeholder="Proveedor">
                <input type="text" name="Nit" id="" placeholder="Nit">
                <input type="text" name="Cond" id="" placeholder="Conductor">
                <input type="text" name="Ced" id="" placeholder="Cedula">
                <input type="text" name="Pla" id="" placeholder="Placa">
                <input type="text" name="Lote" id="" placeholder="Lote">
                <input type="text" name="Proceden" id="" placeholder="Procedencia">
                <input type="submit" name="" id="" value="Guardar">
                <input type="reset" value="Borrar">
            </form>

        <footer>
            Todos los derechos reservados 2023
        </footer>

</body>
</html>
