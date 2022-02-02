<?php
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="../estilos/bootstrap-5.1.3-dist/css/bootstrap.css"> -->
    <link href="../estilos/estilos.css" rel="stylesheet">



</head>

<body>
    <header id="header" class="container-fluid cabecera ">

        <h1>Elige tu portátil</h1>

        <nav class="navbar navbar-expand-sm  navbar-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Inicio</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="elegir.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                Elige tu portátil</a>
                        </li>
                        <li class="nav-item">
                            <a href="tipos.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                </svg>
                                Tipos portátiles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contacto.php" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
                                Contacto</a>
                        </li>
                        
                    </ul>
                <!-- </div>
                <?php
                // if (!isset($_SESSION["usuario"])) {
                //     echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">';
                //     echo ' <a href="loging.php">Inicia sesion</a>';
                //     echo  '<a href="registrar.php">Registrate</a>';
                //     echo '</div>';
                // } else {
                //     echo '<div class="collapse navbar-collapse navbar-dark " id="collapsibleNavbar">';
                //     echo '<p> Bienvenido ' . $_SESSION["usuario"] . '</p>';
                //     echo '<br>';
                //     echo '<button type="submit">';
                //     echo '<a href="destruir.php">Desconectar</a>';
                //     echo '</button>';

                //     echo '</div>';
                // }
                ?>
            </div> -->
        </nav>





    </header>
    <div class="container">
        <div class="container  bg-light d-flex flex-column d-flex ">
            <div class=" sticky-top" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
                <nav class="navbar navbar-expand-lg navbar-dark  navpro">
                    <div class="container">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#gaming">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                                        <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z" />
                                        <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                                    </svg>
                                    Gaming
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#trabajo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                    Workstation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#basico">Básico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#convertible">2 en 1</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                    </svg>
                                    Cabecera</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- <div class="content"> -->
            <div id="gaming" class="mb-1 contenedores">


                <h3> Gaming</h3>

                <p>
                    Un <span>portátil gaming</span> es un tipo de portátil destinado de forma casi exclusiva para jugar a videojuegos. Este tipo de portatiles
                    posee un hardware con espeficico para juegos. Como una tarjeta grafica que sea capaz de sacar una gran cantidad de FPS (fotogramas por segundo),
                    o una pantalla con elevados Hercios para que muestren los FPS generados.
                    <br>

                    <br>

                    Este tipo de portatiles podemos encontrar diferentes configuraciones, puedemos escoger un equipo con un presusupuesto reducido
                    que dispondra de una configuracion de hahrdware menor pero con el que podremos jugar a juegos menos exigetnes o juegos competitivos
                    que consumen pocos recuros como por ejemplo:
                    <br>

                    <br>
                <ul>
                    <li>LOL (League of legend)</li>
                    <li>Valorant</li>
                    <li>Fortnite</li>
                    <li>Counter Strike Global Offensive</li>
                </ul>
                <br>

                    <br>
                Igualemnte podemos econtrar equipos con mejor hardware capaces de ejucutar los juegos triple A mas exigentes del mercado,
                claro esta que para obtener esta mejroa de hardware deberemos hacer una inversión aun mayor.
                <br>

                    <br>
                <ul>
                    <li>Procesador: </li>
                    <p> Es el cerebro del ordenador</p>
                    <li>Gráfica: </li>
                    <p>Procesasador dedicado para gráficos.</p>
                    <li>Pantalla:</li>
                    <p>Es donde se muestra la infromacion al suaurio con una interfaz amigable. en portatiles actuales podemos encontrar patallas con grandes hercios. Los hercios es la frercuencia con que la pantalla puede mostrar las imaganes por segundo</p>
                </ul>
                <br>

                    <br>
                El principal incoveniente que tienen los portátiles destinados a juegos es su peso. Estos suelen pesar entre los 2kg hasta los 3kg, esto es debido a que la grafica y el procesador durante las partidas pueden alcanzar altas temperaturas, para poder
                refrigerar estos componentes tienen un sistema de refigeracion de gran grosor que hace que aumente el peso.
                </p>
                <a class="nav-link" href="#header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                    </svg>
                </a>
            </div>
            <div class="mb-1">

                <h3 id="trabajo">Workstation</h3>

                <p>
                    Los portátiles workstation son aquellos que estan destinados al trabajo exigente. Este tipo de equipos suele tener un hardware exigente. A diferencia de los portatiles gaming que suelen tener un peso elevado estos portatiles tienden a ser
                    livianos ya que la mayoria de estos portátiles no nesesitan una gran refrigeración. 
                    <br>

                    <br>
                    La mayoria de estos portátiles suelen estar enfocados a usuarios que requieren de potencia para su trabajo y que por su peso tenga una gran movilidad. Algunos de los ejemplos de usuarios son los siguientes:
                    <ul>
                        <li>Programadores</li>
                        <li>Diseñadores gráficos</li>
                        <li>Ingenieros</li>
                    </ul>
                    <br>

                    <br>
                    La principal desventaja que tienen estos equipos su almacenamiento reducido, por lo que tendras que cambiar el disco duro por uno de mayor capacidad u optar por servicios en la sube de almacenamiento
                </p>
                <a class="nav-link" href="#header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                    </svg>
                </a>
            </div>
            <div class="mb-1">

                <h3 id="basico">Básico</h3>

                <p>
                    Este tipo de equipos se caracteriza por tener un hardware muy simple y un precio bastante Economico que oscila entre los 350€ y los 599€. Estos estan destinados a usuarios que van a realizar pequeñas tareas por ejemplo:
                    <br>

                    <br>
                    <ul>
                        <li>Navegar en internet</li>
                        <li>Ver películas</li>
                        <li>Realizar documentos</li>
                    </ul>
                    <br>

                    <br>
                    El principal inconveniente de estos portátiles es que debido a su precio el hardware puede ser algo lento.
                </p>
                <a class="nav-link" href="#header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                    </svg>
                </a>
            </div>
            <div class="mb-1">

                <h3 id="convertible">2 en 1</h3>

                <p>
                    Los portátiles 2 en 1 o convertibles son aquellos que tienen lo mejor del mundo de las tablet y de los portátiles.
                    <br>

                    <br>
                    <ul>
                        <li>Pantalla táctil</li>
                        <li>Hardware competente</li>
                    </ul>
                    <br>

                    <br>
                    Estos equipos pueden ser usados para realizar las tareas mas simples como navegar por internet o realizar tareas que requieren de algo mas de potencia hacer diseños gráficos. Muchos de estos portátiles pueden acoplarse a un teclado o usarse como tableta, tambien hay modelos 
                    que su pantalla 360 grados. Suelen tener un lapiz táctil para la pantalla, este complento en la mayoria de casos se compra a parte del portátil.
                    
                    
                </p>

                <a class="nav-link" href="#header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </div>

    <!-- <footer class="has-sticky-footer">
        <div>
            <div>
                <h6>Redes sociales</h6>
            </div>
            <div>
                <h6>About</h6>
            </div>
        </div>

    </footer> -->
</body>
<style>
    .contenedores {
        margin-top: 5vh;

    }
</style>

</html>