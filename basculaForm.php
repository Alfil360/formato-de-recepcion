<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báscula Form</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
        <header>
            <div class="imagenLogo">
                <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/13077/windmill-clipart-md.png" alt="logo molino">
                </div>
    
                <div class="headerText">
                <h2>Báscula</h2>
                </div>
        </header>
        
        <nav>
            <ul>
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Nuevo Pesaje</a>
                </li>
            </ul>

        </nav>

            <form action="calidad.php" method="POST">
                <input type="text" name="tiquete" id="" placeholder="Tiquete de Báscula">
                <input type="text" name="bruto" id="" placeholder="Peso Bruto">
                <input type="text" name="tara" id="" placeholder="Tara">
                <input type="text" name="neto" id="" placeholder="Peso Neto">
                <br>
                <input id="granel" type="radio" name="empaque">
                <label for="granel">Granel</label>
                <input id="bultos" type="radio" name="empaque">
                <label for="bultos">Bultos</label>
                <input type="text" name="bultos" id="" placeholder="cantidad">
                <br>
                <input type="submit" name="" id="" value="Guardar">
                <input type="reset" value="Borrar">
            </form>

        <footer>
            Todos los derechos reservados 2023
        </footer>
    
</body>
</html>