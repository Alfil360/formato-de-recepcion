<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link rel="stylesheet" href="../formato-de-recepcion/estilos/cards.css">
    <script src="https://kit.fontawesome.com/88a36f4c42.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        // Incluir el archivo de conexión
        include "../formato-de-recepcion/conexion/conexion.php";

        function obtenerRegistrosDesdeDB($conexion) {
            // Código para obtener los registros desde la base de datos utilizando $conexion
            $query = "SELECT NIT FROM proveedores";
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
                <h1>Aministración de Proveedores</h1>
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
                            <svg class="icon-card" fill="none" height="108" viewBox="0 0 48 48" width="108" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="m19.5 11.9111c2.2091 0 4-1.7908 4-3.99997 0-2.20914-1.7909-4-4-4s-4 1.79086-4 4c0 2.20917 1.7909 3.99997 4 3.99997zm-2.4362 1.5088c-.0366 0-.073.0006-.1092.0019h-1.9547-5.85702v-4.51021h-1.71429v4.51021h-1.92859c-.82843 0-1.5.6716-1.5 1.5s.67157 1.5 1.5 1.5h1.92859v18.3242c-.96789.1979-1.83773.7239-2.46246 1.4892s-.96601 1.7229-.96613 2.7108v5.1429h1.71429v-6.0001h1.7143v6.0001h1.71429v-6.0001h1.71432v6.0001h1.7143v-5.1429c-.0002-.9879-.3414-1.9455-.9662-2.7108-.6247-.7653-1.4945-1.2913-2.46242-1.4892v-18.3242h4.94022v25.8821c0 .899.7355 1.6346 1.6346 1.6346.899 0 1.6345-.7356 1.6345-1.6346v-12.1729h4.2692v12.1729c0 .899.7355 1.6346 1.6346 1.6346.899 0 1.6345-.7356 1.6345-1.6346v-18.1487c.899 0 3.6751-1.7112 3.6751-5.9249 0-3.1759-2.7761-4.8104-3.6751-4.8104zm19.3131.798c.0002-.0002.0003-.0003.6231.7821.6228-.7824.6229-.7823.6231-.7821l.0004.0003.001.0007.0024.002.007.0056.0224.0182c.0185.0152.044.0364.0756.0631.0631.0534.1508.1294.255.2246.2069.189.4855.4594.7671.7827.2791.3204.5791.7129.8134 1.147.2304.4266.4326.958.4326 1.5379s-.2022 1.1113-.4326 1.5379c-.2343.4341-.5343.8266-.8134 1.147-.2757.3165-.5485.5824-.754.7707v2.0614c.2532-.4046.6073-.8321 1.0981-1.1154.5022-.29 1.0635-.3806 1.5481-.3944.4931-.014.9831.0495 1.4.131.4208.0822.7944.1882 1.0615.2729.1345.0427.2441.0806.3219.1086.0245.0088.0459.0166.064.0233.0107.004.0202.0075.0285.0106l.0269.0103.0084.0033.0029.0011.0012.0004.0004.0002c.0002.0001.0005.0002-.3657.9307.9889.1482.9889.1484.9889.1486l-.0001.0005-.0002.0012-.0005.0031-.0013.0089-.0046.0285c-.0039.0236-.0095.0563-.0168.097-.0147.0814-.0367.1953-.067.3331-.0602.2737-.1552.6502-.2943 1.0557-.1379.4018-.3279.8579-.5867 1.2779-.2542.4129-.6133.8536-1.1155 1.1436s-1.0635.3805-1.5482.3943c-.4931.0141-.983-.0494-1.4-.1309-.4208-.0823-.7943-.1883-1.0614-.273-.0188-.0059-.037-.0118-.0547-.0175-.0115-.0037-.0227-.0074-.0338-.011v2.9574c.2532-.4046.6073-.8321 1.0981-1.1154.5022-.29 1.0635-.3806 1.5481-.3944.4931-.014.9831.0495 1.4.131.4208.0822.7944.1882 1.0615.2729.1345.0427.2441.0806.3219.1086.039.014.0701.0255.0925.0339l.0269.0103.0084.0033.0029.0011.0012.0004.0004.0002c.0002.0001.0005.0002-.3657.9307.9889.1482.9889.1484.9889.1486l-.0001.0005-.0002.0012-.0005.0031-.0013.0089-.0046.0285c-.0039.0236-.0095.0563-.0168.097-.0147.0814-.0367.1953-.067.3331-.0602.2737-.1552.6502-.2943 1.0557-.1379.4018-.3279.8579-.5867 1.2779-.2542.4129-.6133.8536-1.1155 1.1436s-1.0635.3805-1.5482.3943c-.4931.0141-.983-.0494-1.4-.1309-.4208-.0823-.7943-.1883-1.0614-.273-.0309-.0098-.0604-.0193-.0885-.0285v2.9574c.2532-.4046.6073-.8321 1.0981-1.1154.5022-.29 1.0635-.3806 1.5481-.3944.4931-.014.9831.0495 1.4.131.4208.0822.7944.1882 1.0615.2729.1345.0427.2441.0806.3219.1086.039.014.0701.0255.0925.0339l.0269.0103.0084.0033.0029.0011.0012.0004.0004.0002c.0002.0001.0005.0002-.3657.9307.9889.1482.9889.1484.9889.1486l-.0001.0005-.0002.0012-.0005.0031-.0013.0089-.0046.0285c-.0019.0111-.0041.0243-.0067.0394-.0029.0168-.0062.0361-.0101.0576-.0147.0814-.0367.1953-.067.3331-.0602.2737-.1552.6502-.2943 1.0557-.1379.4018-.3279.8579-.5867 1.2779-.2542.4129-.6133.8536-1.1155 1.1436s-1.0635.3805-1.5482.3943c-.4931.0141-.983-.0494-1.4-.1309-.4208-.0823-.7943-.1883-1.0614-.273-.0177-.0056-.0349-.0111-.0517-.0165-.0125-.0041-.0248-.0081-.0368-.012v2.4403c0 .5523-.4477 1-1 1s-1-.4477-1-1v-2.3783c-.2558.078-.5868.1678-.9538.2395-.4169.0815-.9069.145-1.4.1309-.4846-.0138-1.0459-.1043-1.5481-.3943s-.8613-.7307-1.1156-1.1436c-.2587-.42-.4487-.8761-.5866-1.2779-.1392-.4055-.2341-.782-.2943-1.0557-.0303-.1378-.0523-.2517-.067-.3331-.0074-.0407-.0129-.0734-.0168-.097l-.0046-.0285-.0014-.0089-.0004-.0031-.0002-.0012-.0001-.0005c0-.0002-.0001-.0004.9889-.1486-.3662-.9305-.366-.9306-.3658-.9307l.0005-.0002.0011-.0004.0029-.0011.0084-.0033.027-.0103c.0224-.0084.0535-.0199.0924-.0339.0778-.028.1875-.0659.322-.1086.2671-.0847.6406-.1907 1.0614-.2729.417-.0815.9069-.145 1.4-.131.4847.0138 1.046.1044 1.5482.3944.3752.2166.6705.5174.9019.8279v-2.6079c-.2558.078-.5868.1678-.9538.2395-.4169.0815-.9069.145-1.4.1309-.4846-.0138-1.0459-.1043-1.5481-.3943s-.8613-.7307-1.1156-1.1436c-.2587-.42-.4487-.8761-.5866-1.2779-.1392-.4055-.2341-.782-.2943-1.0557-.0303-.1378-.0523-.2517-.067-.3331-.0074-.0407-.0129-.0734-.0168-.097l-.0046-.0285-.0014-.0089-.0004-.0031-.0002-.0012-.0001-.0005c0-.0002-.0001-.0004.9889-.1486-.3662-.9305-.366-.9306-.3658-.9307l.0005-.0002.0011-.0004.0029-.0011.0084-.0033.027-.0103c.0224-.0084.0535-.0199.0924-.0339.0778-.028.1875-.0659.322-.1086.2671-.0847.6406-.1907 1.0614-.2729.417-.0815.9069-.145 1.4-.131.4847.0138 1.046.1044 1.5482.3944.3752.2166.6705.5174.9019.8279v-2.6079c-.2558.078-.5868.1678-.9538.2395-.4169.0815-.9069.145-1.4.1309-.4846-.0138-1.0459-.1043-1.5481-.3943s-.8613-.7307-1.1156-1.1436c-.2587-.42-.4487-.8761-.5866-1.2779-.1392-.4055-.2341-.782-.2943-1.0557-.0303-.1378-.0523-.2517-.067-.3331-.0038-.0208-.0071-.0395-.0099-.0559-.0027-.0158-.005-.0296-.0069-.0411l-.0046-.0285-.0014-.0089-.0004-.0031-.0002-.0012-.0001-.0005c0-.0002-.0001-.0004.9889-.1486-.3662-.9305-.366-.9306-.3658-.9307l.0005-.0002.0011-.0004.0029-.0011.0084-.0033.027-.0103c.0224-.0084.0535-.0199.0924-.0339.0778-.028.1875-.0659.322-.1086.2671-.0847.6406-.1907 1.0614-.2729.417-.0815.9069-.145 1.4-.131.4847.0138 1.046.1044 1.5482.3944.3752.2166.6705.5174.9019.8279v-1.7739c-.2055-.1883-.4783-.4542-.754-.7707-.2791-.3204-.579-.7129-.8134-1.147-.2304-.4266-.4326-.958-.4326-1.5379s.2022-1.1113.4326-1.5379c.2344-.4341.5343-.8266.8134-1.147.2816-.3233.5602-.5937.7671-.7827.1042-.0952.1919-.1712.255-.2246.0316-.0267.0571-.0479.0756-.0631l.0224-.0182.007-.0056.0024-.002.001-.0007zm-5.3769 9.2817-.989.1482c-.069-.4608.1893-.9081.6228-1.0787zm0 7-.989.1482c-.069-.4608.1893-.9081.6228-1.0787zm0 7-.989.1482c-.069-.4608.1893-.9081.6228-1.0787zm12.1962 0 .3662-.9305c.4335.1706.6917.6179.6227 1.0787zm0-7 .3662-.9305c.4335.1706.6917.6179.6227 1.0787zm0-7 .3662-.9305c.4335.1706.6917.6179.6227 1.0787zm-6.1962-8.4996-.6228-.7824c.3645-.2901.8811-.2901 1.2456 0z" fill="#a6a6a6" fill-rule="evenodd"/>
                            </svg>                        
                        </div>
                        <div class="containerText2">
                            <p><?php echo $registro["NIT"]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay proveedores registrados.</p>
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
                    this.querySelector("p").style.color = "#737373";
                    this.querySelector("p").style.fontWeight = "bold";
                    // this.querySelector("span").style.display = ""; // activar el icono correspondiente
                    activeCard = this; // actualizar la referencia de la card activa
                    //activar el icono si hay card activa
                    iconoHeaderPrint.style.display = "block";
                    iconoHeaderEye.style.display = "block";
                } else { // Si la card está activa, cambiar su estilo de fondo a su color original y marcarla como inactiva
                    this.style.backgroundColor = "";
                    this.querySelector("path").style.fill = "";
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