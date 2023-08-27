<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenamiento</title>
    <link rel="stylesheet" href="../formato-de-recepcion/estilos/form.css">
</head>
<body>
    <section>
        <header>
            <div class="imagenLogo">
                <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/13077/windmill-clipart-md.png" alt="logo molino">
            </div>
    
            <div class="headerText">
                <h1>Almacenamiento</h1>
            </div>
        </header>
        <main>
            <div class="contenido">
                <p>Por favor, ingrese los datos correspondientes al almacenamiento del producto</p>
                <form action="../formato-de-recepcion/conexion/alma.php" method="POST">
                    <input type="hidden" name="formato" value="<?php echo $_GET['formato']; ?>">
                    <input type="text" name="silo" id="silo" placeholder="Sitio de destino" >
                    <input type="text" name="lote" id="lote" placeholder="Lote">
                    <textarea name="obs" cols="32" rows="13" placeholder="Observaciones"></textarea>
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="submit" name="submit" id="submit" value="Guardar">
                </form>
            </div>
        </main>            
    </section>
    <footer>
        Todos los derechos reservados 2023
    </footer>    
</body>
</html>