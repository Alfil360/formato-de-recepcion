<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio</title>
    <link rel="stylesheet" href="../formato-de-recepcion/estilos/cards.css">
    <script src="https://kit.fontawesome.com/88a36f4c42.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <header>            
            <i class="fa-solid fa-bars custom-icon" onclick="toggleDropdown()"></i>
            <div class="headerText">
                <h1>Laboratorio</h1>
            </div>                      
        </header>
        <main>
            <div id="myDropdown" class="dropdown-content">
                <a href="/actualizarDatos.html">
                    <div class="containerTextoAndIconDropdown">
                        <span>Perfil</span>
                        <img class="imagenDropdown" src="https://cdn.iconscout.com/icon/free/png-256/free-user-circle-3609976-3014616.png" alt="circle user icon">
                    </div>
                </a>
                <div class="divider"></div>
                <a href="/index.html">
                    <div class="containerTextoAndIconDropdown">
                        <span>Cerrar sesión</span>
                        <img class="imagenDropdown" src="https://images.vexels.com/media/users/3/153377/isolated/lists/4e3ad7aee69e5da6de7e91b63e3952de-turn-off-stroke-icon.png" alt="on off icon">
                    </div> 
                </a>                    
            </div>            
            <a class="card2" href="../formato-de-recepcion/laboratorioMenu.php">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F1</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F2</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F3</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F4</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F5</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F6</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F7</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F8</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F9</p>
                </div>
            </a>
            <a class="card2" href="/laboratorioMenu.html">
                <i class="fa-regular fa-file-pdf"></i>
                <div class="containerText2">
                  <p>F10</p>
                </div>
            </a>
        </main>
    </section> 
    <script>
        //Script para el menu desplegable
        function toggleDropdown() {
            var dropdown = document.getElementById("myDropdown");
            dropdown.classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.custom-icon')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
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
                activeCard.querySelector(".svg-inline--fa").style.color = ""; // Cambia esto a tu propiedad deseada
                activeCard.querySelector("p").style.color = "";
                // activeCard.querySelector("span").style.display = "none"; // desactivar el icono activo
                }

                //obtener el elemento icono
                const iconoHeaderPrint = document.getElementById("iconoPrint");
                const iconoHeaderEye = document.getElementById("iconoEye");

                // Si la card está inactiva, cambiar su estilo de fondo a un nuevo color y marcarla como activa
                if (this.style.backgroundColor === "") {
                this.style.backgroundColor = "#a6a6a6"; // aqui se cambia el atributo
                this.querySelector(".svg-inline--fa").style.color = "#737373"; // Cambia esto a tu propiedad deseada
                this.querySelector("p").style.color = "#737373";
                this.querySelector("p").style.fontWeight = "bold";
                // this.querySelector("span").style.display = ""; // activar el icono correspondiente
                activeCard = this; // actualizar la referencia de la card activa
                //activar el icono si hay card activa
                iconoHeaderPrint.style.display = "block";
                iconoHeaderEye.style.display = "block";
                } else { // Si la card está activa, cambiar su estilo de fondo a su color original y marcarla como inactiva
                this.style.backgroundColor = "";
                this.querySelector(".svg-inline--fa").style.color = ""; // Cambia esto a tu propiedad deseada
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