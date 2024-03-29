<?php

?>
<!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Elige tu portatil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../../estilos/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../estilos/estilos_elegir.css">
    <link rel="stylesheet" href="../../estilos/estilos_main.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNRJ888MW6"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4818848852532039"
     crossorigin="anonymous"></script>
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "ccpaAcknowledgeOnDisplay": true,
            "ccpaApplies": true,
            "consentOnContinuedBrowsing": false,
            "enableCcpa": true,
            "enableTcf": true,
            "floatingPreferencesButtonDisplay": "bottom-right",
            "invalidateConsentWithoutLog": true,
            "lang": "es",
            "perPurposeConsent": true,
            "tcfPurposes": {
                "1": true,
                "2": "consent_only",
                "3": "consent_only",
                "4": "consent_only",
                "5": "consent_only",
                "6": "consent_only",
                "7": "consent_only",
                "8": "consent_only",
                "9": "consent_only",
                "10": "consent_only"
            },
            "whitelabel": false,
            "cookiePolicyId": 18091383,
            "siteId": 2546363,
            "banner": {
                "acceptButtonDisplay": true,
                "closeButtonRejects": true,
                "customizeButtonDisplay": true,
                "explicitWithdrawal": true,
                "position": "float-top-center",
                "rejectButtonDisplay": true
            }
        };
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4818848852532039" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CNRJ888MW6');
    </script>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4818848852532039" crossorigin="anonymous"></script>
    <script src="../../javaScript/validarFormulario.js"></script>
</head>


<body>
    <header class="container-fluid cabecera">
        <div id="cabecera">
            <h1>Elige tu portátil</h1>
            <!-- <h4 id="beta">Beta</h4> -->
        </div>
        <div id="nav">
            <nav class="navbar navbar-expand-sm  navbar-dark">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">

                        <li class="nav-item">
                                <a href="../vistas_seleccionar/seleccionar_portatil.html" class="nav-link">

                                    Portátiles</a>
                            </li>
                            <li class="nav-item">
                                <a href="../vistas_seleccionar/seleccionar_ratones.html" class="nav-link">

                                    Ratones</a>
                            </li>
                            <li class="nav-item">
                                <a href="../vistas_seleccionar/seleccionar_teclados.html" class="nav-link">

                                    Teclados</a>
                            </li>
                            <li class="nav-item">
                                <a href="../vistas_seleccionar/seleccionar_cascos.html" class="nav-link">

                                    Cascos</a>
                            </li>


            </nav>
            <!-- Checkbox desactivado temporalmente -->
            <!-- <div class="inter">
                <label class="switch">
                    <input type="checkbox">
                    <div class="slider round"></div>
                </label>
            </div>
        </div> -->

    </header>
    <main>
        <div class="contenedor">
            <h1 class="titulo">Portátiles</h1>
            <div class="container bg-grey d-flex flex-column justify-content-around ">
                <form action="" method="POST" class="grid">
                    <div class="form-check" id="tipo" >
                        <label for="Tipo" id="Tipo2">
                            <h4>Tipos</h4>
                        </label><br>
                        <label for="gaming" data-bs-toggle="tooltip" data-bs-placement="right" >Gaming
                        </label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="gaming" id="gamming" 
                        onblur="validacionTipoPortatil()">
                        <br>
                        <label for="basico" data-bs-toggle="tooltip" data-bs-placement="top" title="Prueba 2">Básico</label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="basico" id="basico" onblur="validacionTipoPortatil()">
                        <br>
                      
                        <label for="Convertible">2 en 1</label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="Convertible" id="Convertible" onblur="validacionTipoPortatil()">

                    </div>



                    <div class="form-check " id="almacenamiento">
                        <label for="Almacenamiento">
                            <h4>Almacenamiento</h4>
                        </label><br>
                        <label for="menos">250 GB</label>
                        <input type="radio" class="form-check-input" name="almacenamiento" value="250GB" id="poco" onblur="validacionAlmacenmaiento()">
                        <br>
                        <label for="medio">500 GB</label>
                        <input type="radio" class="form-check-input" name="almacenamiento" value="500GB" id="medio" onblur="validacionAlmacenmaiento()">
                        <br>
                        <label for="max">1 TB</label>
                        <input type="radio" class="form-check-input" name="almacenamiento" value="1TB" id="grande" onblur="validacionAlmacenmaiento()">
                        <br>
                        <!-- <label for="max-extend">+1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="+1TB"> -->
                    </div>

                    <div class="form-check thumbnail" id="ram">
                        <label for="ram">
                            <h4>RAM</h4>


                        </label><br>
                        <label for="8">8</label>
                        <input type="radio" class="form-check-input" name="memoria" value="8">

                        <br>
                        <label for="16">16</label>
                        <input type="radio" class="form-check-input" name="memoria" value="16">
                        <br>
                        <label for="32">32</label>
                        <input type="radio" class="form-check-input" name="memoria" value="32">
                    </div>

                    <div class="form-check " id="Precio">
                        <label for="precio">
                            <h4>Presupuesto</h4>

                        </label><br>
                        <label for="bajo">Bajo</label>
                        <input type="radio" class="form-check-input" name="precio" value="bajo">
                        <br>
                        <label for="moderado">Moderado</label>
                        <input type="radio" class="form-check-input" name="precio" value="moderado">
                        <br>
                        <label for="elevado">Elevado</label>
                        <input type="radio" class="form-check-input" class="form-check-input" name="precio" value="elevado">
                        <br>

                    </div>
                    <div class="form-check " id="Pulgadas">
                        <label for="Pulgadas">
                            <h4 class=" thumbnail">Pulgadas</h4>

                        </label><br>

                        <label for="pequeño">Pequeño</label>
                        <input type="radio" class="form-check-input" name="Pulgadas" value="pequeño">
                        <br>
                        <label for="medio">Medio</label>
                        <input type="radio" class="form-check-input" name="Pulgadas" value="medio">
                        <br>
                        <label for="grande">Grande</label>
                        <input type="radio" class="form-check-input" class="form-check-input" name="Pulgadas" value="grande">
                        <br>

                    </div>





                    <input class="boton" type="submit" value="Buscar" name="mostrar" onclick="pruebas()">


                </form>


                <div class="container bg-grey p-2 ms-auto principal thumbnail">

                    <?php
                    require_once('../../controlers/controlador.php');
                    require_once('../../vistas/Vistas_dinamicas/montarTabla.php');
                    $cLaptop = new ControladorPortatil();


                    $datos =  $cLaptop->mostrar();

                    montarTabla::montar($datos);


                    ?>


                </div>
        <div class="Informativo">
            <h3 id="adv">Advertetncia</h3>
            <p>                    
Puede que algunos portátiles tengan algunas características diferentes a las indicadas del formulario, como por ejemplo RAM de 4GB o menos espacio de almacenamiento. Esto es debido a que existen pocos portátiles con esas características y pocos usuarios que quieran estas caracteristicas
</p>
        </div>
                <div>
                <h3 class="title">Tipos</h3>
                <br>
                    <div id="gaming" class="mb-1 contenedores">

                               
                        <h4> Gaming</h4>

                        <p>
                            Un <span> portátil gaming </span> es un tipo de portátil destinado de forma casi exclusiva para jugar a videojuegos. Este tipo de portátiles
                            posee un hardware específico para juegos. Como una tarjeta grafica que sea capaz de sacar una gran cantidad de FPS (fotogramas por segundo),
                            o una pantalla con elevados Hercios para que muestre los FPS generados.
                            <br>

                            <br>

                            Este tipo de portátiles podemos encontrar diferentes configuraciones, podemos escoger un equipo con un presupuesto reducido
                            que dispondrá de una configuración de hardware menor pero con el que podremos jugar a juegos menos exigentes o juegos competitivos
                            que consumen pocos recursos como por ejemplo:
                            <br>

                            <br>
                        <ul>
                            <li>LOL (League of legend)</li>
                            <li>Valorant</li>
                            <li>Fortnite</li>
                            <li>Counter Strike Global Offensive</li>
                        </ul>
                        <br>

                    
                        El principal inconveniente que tienen los portátiles destinados a juegos es su peso. Estos suelen pesar entre los 2 kg hasta los 3 kg, esto es debido a que la gráfica y el procesador durante las partidas pueden alcanzar altas temperaturas, para poder
                        refrigerar estos componentes tienen un sistema de refrigeración de gran grosor que hace que aumente el peso.
                        </p>
                        <br>
                       
                    </div>

                    
                    <div class="mb-1">

                        <h4 id="básico">Normales</h4>

                        <p>
                            Este tipo de equipos se caracteriza por tener un hardware de muy variado junto con los precios. Esta categoria contiene el mayor numero de equipos. Algunos portatiles están destinados al trabajo exigente. Este tipo de equipos suele tener un hardware con buen rendimiento. A diferencia de los portátiles gaming que suelen tener un peso elevado estos portátiles tienden a ser
                    livianos ya que la mayoría de estos portátiles no necesitan una gran refrigeración. La mayoría de estos portátiles suelen estar enfocados a usuarios que requieren de potencia para su trabajo y que por su peso tenga una gran movilidad. Tambien podemos ecnotrar estos dispositivos con un hardware menos potente dedicado a tareas mas livianas y cotidianas que realizamos dia a dia.

                            <br>

                            <br>
                   

                     
                      
                    </div>
                    <div class="mb-1">

                        <h4 id="convertible">2 en 1</h4>

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
                        Estos equipos pueden ser usados para realizar las tareas más simples como navegar por internet o realizar tareas que requieren de algo más de potencia para hacer diseños gráficos. Muchos de estos portátiles pueden acoplarse a un teclado o usarse como tableta, también hay modelos
                        que su pantalla 360 grados. Suelen tener un lápiz táctil para la pantalla, este complemento en la mayoría de casos se compra a parte del portátil. Estos son ideales para personas que realicen actividades como dibujo y que viajen mucho ya que por norma geenral suelen ser el tipo 
                        de portátil mas livano


                        </p>
                        <br>

                    </div>

                </div>

                <div>
                    <h3 class="title">Presupuesto</h3>
                    <br>
                    <div>
                        <h4>Presupuesto Bajo</h4>      <br>
                        <p>Los portátiles con un presupuesto bajo son aquellos que oscilan entre los 300 € y los 599 €  como máximo, son aquellos que por norma general suelen tener un hardware más limitado. </p>
                        <br>
                    </div>
                    <div>
                        <h4>Presupuesto Moderado</h4>      <br>
                        <p>Los portátiles con un presupuesto moderado son aquellos que se encuentran entre un rango de precio de  600 €  hasta los  1000 €. Este tipo de equipos contienen un buen hardware. En este rango de precio se encuentran la mayoría de portátiles del mercado.</p>
                    
                        <br>
                    </div>
                    <div>
                        <h4>Presupuesto Elevado</h4>
                        <br>
                        <p>Los portátiles con un presupuesto elevado son aquellos que su  precio está por encima de los 1000 € </p>
                        <br>
                    </div>
                </div>
                <div>
                    <h3>Pulgadas</h3>
                    <br>
                    <div>
                        <h4>Pequeño</h4>
                        <br>
                        <p>Los portátiles pequeños son aquellos que tienen unas pulgadas inferiores a 14. Estos portátiles son aquellos que  cuando los medimos su diagonal mide menos 35 cm aproximadamente.</p>
                        <br>
                    </div>
                    <div>
                        <h4>Medio</h4>
                        <br>
                        <p>Los portátiles de tamaño medio son aquellos que tienen unas pulgadas entre las 14.5 pulgadas y las 16,5. La diagonal de estos equipos como normal general suele estar entre los 36 cm y los 40 cm.</p>
                        <br>
                    </div>
                    <div>
                        <h4>Grande</h4>
                        <br>
                        <p>Los portátiles grandes son aquellos que tienen 17 pulgadas. La diagonal de estos equipos se encuentra sobre los 40 cm.</p>
                        <br>
                    </div>
                </div>

    </main>
    <footer class="container-fluid pie post-footer">
        <nav class="navbar navbar-expand-sm  navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../contacto.php" class="nav-link">

                        Contacto</a>
                </li>
                <li class="nav-item">
                    <a href="../privacidad.php" class="nav-link">

                        Privacidad</a>
                </li>
            </ul>

        </nav>

        <h6 class="copy">&copy; Todos los derechos reservados - Dragonf-j - <?php $year= date("Y"); echo $year;?></h6>

    </footer>
</body>


</html>
