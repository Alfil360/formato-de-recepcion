<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../formato-de-recepcion/estilos/cards.css">
    <script src="https://kit.fontawesome.com/88a36f4c42.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        // Incluir el archivo de conexión
        include "../formato-de-recepcion/conexion/conexion.php";

        function obtenerRegistrosDesdeDB($conexion) {
            // Código para obtener los registros desde la base de datos utilizando $conexion
            $query = "SELECT usuario FROM usuarios";
            $resultado = $conexion->query($query);

            $registros = [];

            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $registros[] = $fila;
                }
            }

            $conexion->close();

            return $registros;
        }

        $registros = obtenerRegistrosDesdeDB($conexion);
    ?>
    <section>
        <header>             
            <a href="../formato-de-recepcion/admiMenu.php" class="arrowLeft">
                <img src="../formato-de-recepcion/imagenes/arrow-left.svg" alt="arrow left">
            </a>  
            <div class="headerText">
                <h1>Aministración de Usuarios</h1>
            </div>
            <a href="#" class="imagenPrint">
                <img src="https://cdn.iconscout.com/icon/free/png-256/free-printer-1629573-1383399.png" id="iconoPrint" alt="printIcon">
            </a>
            <a href="#" class="span2">
                <img src="https://cdn.iconscout.com/icon/free/png-256/eye-1767966-1502302.png" id="iconoEye" alt="eyetIcon">
            </a>           
        </header>
        <main>                        
            <?php if (!empty($registros)): ?>
                <?php foreach ($registros as $registro): ?>
                    <div class="card2">
                        <div class="icon-card-container">
                            <svg height="108" viewBox="0 0 32 32" width="108" xmlns="http://www.w3.org/2000/svg">
                                <path d="m16 8a5 5 0 1 0 5 5 5 5 0 0 0 -5-5z" fill="#a6a6a6"/>
                                <path d="m16 2a14 14 0 1 0 14 14 14.0158 14.0158 0 0 0 -14-14zm7.9925 22.9258a5.0016 5.0016 0 0 0 -4.9925-4.9258h-6a5.0016 5.0016 0 0 0 -4.9925 4.9258 12 12 0 1 1 15.985 0z" fill="#a6a6a6"/>
                                <path d="m0 0h32v32h-32z" fill="none"/>
                            </svg>                        
                        </div>
                        <div class="containerText2">
                            <p><?php echo $registro["usuario"]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay usuarios registrados.</p>
            <?php endif; ?>
        </main>
    </section>
    <script>
        //Script para cambiar las card al hacer click
        //Seleccionar todas las cards por su clase y agregar un evento de clic a cada una
        const cards = document.querySelectorAll(".card2");
        let activeCard = null; // variable para almacenar la card activa actualmente

        cards.forEach(function(card2) {
            card2.addEventListener("click", function() {
                // Si hay una card activa y no es la misma que la que se hizo clic, desactivarla
                if (activeCard !== null && activeCard !== this) {
                activeCard.style.backgroundColor = "";
                activeCard.querySelector("path").style.fill = "";
                activeCard.querySelector("path:nth-child(2)").style.fill = "";
                activeCard.querySelector("p").style.color = "";
                // activeCard.querySelector("span").style.display = "none"; // desactivar el icono activo
                }

                //obtener el elemento icono
                const iconoHeaderPrint = document.getElementById("iconoPrint");
                const iconoHeaderEye = document.getElementById("iconoEye");

                // Si la card está inactiva, cambiar su estilo de fondo a un nuevo color y marcarla como activa
                if (this.style.backgroundColor === "") {
                this.style.backgroundColor = "#a6a6a6"; // aqui se cambia el atributo
                this.querySelector("path").style.fill = "#737373";
                this.querySelector("path:nth-child(2)").style.fill = "#737373";
                this.querySelector("p").style.color = "#737373";
                this.querySelector("p").style.fontWeight = "bold";
                // this.querySelector("span").style.display = ""; // activar el icono correspondiente
                activeCard = this; // actualizar la referencia de la card activa
                //activar el icono si hay card activa
                iconoHeaderPrint.style.display = "block";
                iconoHeaderEye.style.display = "block";
                } else { // Si la card está activa, cambiar su estilo de fondo a su color original y marcarla como inactiva
                this.style.backgroundColor = "";
                this.querySelector("path:nth-child(2)").style.fill = "";
                this.querySelector("p").style.color = "";
                // this.querySelector("span").style.display = "none"; // desactivar el icono activo
                activeCard = null; // actualizar la referencia de la card activa
                }
                //Para desactivar el icono si no hay card activa
                if (activeCard === null) {
                    iconoHeaderPrint.style.display = "none";
                    iconoHeaderEye.style.display = "none";
                }
            });
        });
    </script>
    
    
</body>
</html>