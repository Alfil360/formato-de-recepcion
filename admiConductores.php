<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conductores</title>
    <link rel="stylesheet" href="../formato-de-recepcion/estilos/cards.css">
    <script src="https://kit.fontawesome.com/88a36f4c42.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        // Incluir el archivo de conexión
        include "../formato-de-recepcion/conexion/conexion.php";

        function obtenerRegistrosDesdeDB($conexion) {
            // Código para obtener los registros desde la base de datos utilizando $conexion
            $query = "SELECT cedula FROM conductores";
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
                <h1>Aministración de Conductores</h1>
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
                            <svg fill="none" height="108" viewBox="0 0 48 48" width="108" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#a6a6a6">
                                    <path clip-rule="red" d="m15.0549 39h7.9451v-7.9451c-4.1716.4612-7.4839 3.7735-7.9451 7.9451zm9.9451-7.9451v7.9451h7.9451c-.4612-4.1716-3.7735-7.4839-7.9451-7.9451zm7.9452 9.9451c-.1397 1.2647-.5411 2.4491-1.1486 3.4993l1.7312 1.0014c.9365-1.6189 1.4722-3.4988 1.4722-5.5007 0-6.0751-4.9249-11-11-11s-11 4.9249-11 11c0 2.0019.5357 3.8818 1.4722 5.5007l1.7312-1.0014c-.6075-1.0502-1.0089-2.2346-1.1486-3.4993z" fill-rule="evenodd"/>
                                    <path d="m27 40c0 1.6569-1.3431 3-3 3s-3-1.3431-3-3 1.3431-3 3-3 3 1.3431 3 3z"/>
                                    <path d="m31.5845 36.8449c-.2859-1.0669.3473-2.1636 1.4142-2.4495l1.9319-.5176c1.0669-.2859 2.1636.3473 2.4495 1.4142l1.0353 3.8637c.2858 1.067-.3473 2.1636-1.4142 2.4495l-1.9319.5177c-1.0669.2858-2.1636-.3473-2.4495-1.4143z"/>
                                    <path d="m10.6198 35.2912c.2859-1.0669 1.3826-1.7001 2.4495-1.4142l1.9319.5177c1.0669.2858 1.7001 1.3825 1.4142 2.4494l-1.0353 3.8637c-.2859 1.067-1.3826 1.7001-2.4495 1.4143l-1.9318-.5177c-1.06698-.2859-1.70015-1.3825-1.41426-2.4495z"/>
                                    <g clip-rule="evenodd" fill-rule="evenodd">
                                        <path d="m15 17v-3h2v3c0 3.866 3.134 7 7 7s7-3.134 7-7v-3h2v3c0 4.9706-4.0294 9-9 9s-9-4.0294-9-9z"/>
                                        <path d="m13.7943 11h20.4551c.0719-.1835.1495-.3998.2268-.6474l.0121-.0387c.2697-.86329.5117-1.63794.5117-3.21713 0-.8008-.5203-1.47511-1.209-2.00829-.6978-.54019-1.6508-1.00269-2.7123-1.37968-2.1258-.75497-4.8068-1.2088-7.0787-1.2088s-4.9529.45383-7.0787 1.2088c-1.0615.37699-2.0145.83949-2.7123 1.37968-.6887.53318-1.209 1.20749-1.209 2.00829 0 1.46606.2452 2.23872.4971 3.03273.0235.074.047.1481.0704.223.0773.2476.1549.4639.2268.6475zm6.2057-3c0-.55228.4477-1 1-1h6c.5523 0 1 .44772 1 1s-.4477 1-1 1h-6c-.5523 0-1-.44772-1-1z"/>
                                        <path d="m14.0214 13.4106c.0454-.2378.2631-.4106.5172-.4106h18.9228c.2541 0 .4718.1728.5172.4106l.0002.0012.0003.0012.0005.0029.0012.0068.0029.0182c.0021.0141.0045.0322.0068.0539.0046.0435.0088.1019.0094.173.0012.1423-.0119.337-.0658.5663-.109.4635-.3808 1.0527-1.0033 1.6253-1.2341 1.1352-3.7696 2.1406-8.9308 2.1406s-7.6967-1.0054-8.9308-2.1406c-.6225-.5726-.8943-1.1618-1.0033-1.6253-.0539-.2293-.067-.424-.0658-.5663.0006-.0711.0048-.1295.0094-.173.0023-.0217.0047-.0398.0068-.0539l.0029-.0182.0012-.0068.0005-.0029.0003-.0012z"/>
                                    </g>
                                </g>
                            </svg>                        
                        </div>
                        <div class="containerText2">
                            <p><?php echo $registro["cedula"]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay conductores registrados.</p>
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
                    activeCard.querySelector("g").style.fill = "";
                    activeCard.querySelector("p").style.color = "";
                    // activeCard.querySelector("span").style.display = "none"; // desactivar el icono activo
                }

                //obtener el elemento icono
                const iconoHeaderPrint = document.getElementById("iconoPrint");
                const iconoHeaderEye = document.getElementById("iconoEye");

                // Si la card está inactiva, cambiar su estilo de fondo a un nuevo color y marcarla como activa
                if (this.style.backgroundColor === "") {
                    this.style.backgroundColor = "#a6a6a6"; // aqui se cambia el atributo
                    this.querySelector("g").style.fill = "#737373";
                    this.querySelector("p").style.color = "#737373";
                    this.querySelector("p").style.fontWeight = "bold";
                    // this.querySelector("span").style.display = ""; // activar el icono correspondiente
                    activeCard = this; // actualizar la referencia de la card activa
                    //activar el icono si hay card activa
                    iconoHeaderPrint.style.display = "block";
                    iconoHeaderEye.style.display = "block";
                } else { // Si la card está activa, cambiar su estilo de fondo a su color original y marcarla como inactiva
                    this.style.backgroundColor = "";
                    this.querySelector("g").style.fill = "";
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