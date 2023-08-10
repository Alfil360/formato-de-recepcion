<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcion Form</title>
    <link rel="stylesheet" href="../formato-de-recepcion/estilos/form.css">
</head>
<body>
    <section>
        <header>
            <div class="imagenLogo">
                <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/13077/windmill-clipart-md.png" alt="logo molino">
            </div>
            <div class="headerText">
                <h1>Recepción</h1>
            </div>            
        </header>
        <main>
            <div class="contenido">
                <p>Por favor, ingrese los datos del proveedor y del conductor</p>
                <form action="/recepcion.html" method="">
                    <input type="text" placeholder="Proveedor" name="proveedor" id="proveedor">
                    <input type="text" placeholder="NIT" name="nit" id="nit">
                    <input type="text" placeholder="Conductor" name="conductor" id="conductor">
                    <input type="text" placeholder="Cedula" name="cedula" id="cedula">
                    <input type="text" placeholder="Placa" name="placa" id="placa">
                    <input type="text" placeholder="Lote" name="lote" id="lote">
                    <input type="text" placeholder="Procedencia" name="procedencia" id="procedencia">
                    <input type="submit" value="ENVIAR">
                </form>
            </div>
        </main>                        
    </section>  
    <footer>
        © Todos los derechos reservados 2023
    </footer>
</body>

</html>