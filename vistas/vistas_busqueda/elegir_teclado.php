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
</head>

<body>
    <header class="container-fluid cabecera">
        <div id="cabecera">
            
                <h1 class="granT">Elige tu portátil</h1>
            
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
            <!-- <div class="inter">
                <label class="switch">
                    <input type="checkbox">
                    <div class="slider round"></div>
                </label>
            </div> -->
        </div>

    </header>
<main>
    <div class="contenedor"> 
        <h1 class="titulo">Teclados</h1>
        <div class="container bg-grey d-flex flex-column justify-content-around ">
            <form action="" method="POST" class="grid">
                <div class="form-check" id="tipo">
                    <label for="Tipo">
                        <h4>Tipo</h4>
                    </label><br>
                    <label for="mecanico" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Mecánico
                    </label>
                    <input type="radio" class="form-check-input" class="tipo" name="tipo" value="mecanico">
                    <br>
                    <label for="Membrana" data-bs-toggle="tooltip" data-bs-placement="top" title="Prueba 2">Membrana</label>
                    <input type="radio" class="form-check-input" class="tipo" name="tipo" value="membrana">

                </div>



                <div class="form-check " id="tamano">
                    <label for="tamano">
                        <h4>Tamaño</h4>
                    </label><br>
                    <label for="cien">100%</label>
                    <input type="radio" class="form-check-input" name="tamano" value="completo">
                    <br>
                    <label for="tkl">75%</label>
                    <input type="radio" class="form-check-input" name="tamano" value="tkl">
                    <br>
                    <label for="mini">60%</label>
                    <input type="radio" class="form-check-input" name="tamano" value="60">
                    <br>

                </div>

                <div class="form-check thumbnail" id="rgb ">
                    <label for="rgb">
                        <h4>RGB</h4>


                    </label><br>
                    <label for="si">Si</label>
                    <input type="radio" class="form-check-input" name="rgb" value="s">

                    <br>
                    <label for="no">No</label>
                    <input type="radio" class="form-check-input" name="rgb" value="n">
                    <br>
                </div>

                <div class="form-check" id="cable">
                    <label for="cable">
                        <h4>Cable</h4>
                    </label><br>
                   
                    </label><br>
                    <label for="si">Si</label>
                    <input type="radio" class="form-check-input" name="cable" value="s">

                    <br>
                    <label for="no">No</label>
                    <input type="radio" class="form-check-input" name="cable" value="n">
                    <br>
                    <br>
                   

                </div>

                <div class="form-check" id="bluetooth">
                    <label for="Bluetooh">
                        <h4>Bluetooth</h4>
                    </label><br>
                   
                    </label><br>
                    <label for="si">Si</label>
                    <input type="radio" class="form-check-input" name="Bluetooh" value="s">

                    <br>
                    <label for="no">No</label>
                    <input type="radio" class="form-check-input" name="Bluetooh" value="n">
                    <br>
                    <br>
                   

                </div>

                <div class="form-check" id="inalambrico">
                    <label for="inalambrico">
                        <h4>Inalámbrico</h4>
                    </label><br>
                   
                    </label><br>
                    <label for="s">Si</label>
                    <input type="radio" class="form-check-input" name="inalambrico" value="S">

                    <br>
                    <label for="n">No</label>
                    <input type="radio" class="form-check-input" name="inalambrico" value="n">
                    <br>
                    <br>
                   

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



                <input class="boton" type="submit" value="Buscar" name="mostrar">


            </form>

            <div class="container bg-grey p-2 ms-auto principal thumbnail">

                <?php
                require_once('../../controlers/controler_keyboard/controlador.php');
                require_once('../../vistas/Vistas_dinamicas/montarTabla.php');
                $cKeyboard = new controladorKeyBoard();

                $datos =  $cKeyboard->mostrar();
                // var_dump($datos);
                montarTabla::montar($datos);


                ?>

            </div>
            <div>
                <h3>Tipo</h3>
                <br>
                <div>
                    <h4>Membrana</h4>
                    <br>
                    <p>Los teclados de membrana son aquellos que tienen tacto suave y silencioso, suelen ser teclados muy finos. Estos por dentro tienen una lámina de plástico hacen contacto con el circuito y mandan la señal. Estos teclados suelen tener un tiempo de respuesta algo elevado pero no es perceptible por el humano.</p>
                    <br>
                </div>
                <div>
                    <h4>Mecanico</h4>
                    <br>
                    <p>               
Los teclados mecánicos son aquellos que se caracterizan por tener el típico ruido de click al pulsar una tecla Estos teclados tienen un tiempo de respuesta menor, ideal para juegos competitivos. Estos teclados suelen ser algo más gruesos.
</p>
                    <br>
                </div>
            </div>
            <div>
                    <h3>Conexiones</h3>
                    <br>
                    <div>
                        <h4>Cable</h4>
                        <br>
                        <p>  Los teclados que tienen cable son aquellos que se conectan al equipo mediante un cable usb. Estos teclados no llevan ni baterías ni pilas.</p>
                        <br>
                        <h4>Inalámbrico</h4>
                        <br>
                        <p>Los teclados inalámbricos o con tecnología 2.4 GHZ son aquellos que mediante un receptor usb recrean las altas tasas de envío de información que tiene un teclados con cable. Este tipo de teclados tiene la misma fiabilidad que los teclados convencionales. Funcionan mediante baterías o pilas.</p>
                        <br>
                        <h4>Bluetooth</h4>
                        <br>
                        <p> Los teclados bluetooth son aquellos que se conectan con aquellos dispositivos que tengan bluetooth. El envío de información es más lento que en otros dispositivos con otras tecnologías, esto es imperceptible. Estos teclados brillan por la ausencia de cables. <span class="info"> No confundir con teclados que tenga tecnología inalámbrica o 2,4 GHZ</span></p>
                    <br>
                    </div>
                </div>
                <div>
                    <h3>RGB</h3>
                    <br>
                    
                    <div>
                        <h4>RGB</h4>
                        <br>
                        <p>El rgb son las siglas de red green and blue, estos son los colores primarios, a partir de la combinación de estos colores podemos crear nuevos colores. Los cascos con estas características son aquellos que tienen en una o varias parte de su cuerpo pequeñas tiras rgb para dar iluminación.</p>
                       <br>
                    </div>
                </div>
                <div>
                    <h3>Formato</h3>
                    <br>
                    <div>
                        <h4>100%</h4>
                        <br>
                        <p>Los teclados completos son aquellos que su tamaño es del 100%, es decir aquellos que vienen con teclado numérico. Suelen tener entre 102 y 105 teclas.</p>
                        <br>
                        <h4>75% o TKL</h4>
                        <br>
                        <p>Los teclados TKL o 75%  son aquellos que su tamaño es del 75% respecto a un teclado de tamaño completo. Son aquellos que tienen las flechas de dirección, botones como imprimir y suprimir. Estos teclados no tienen los números a la derecha.                       
                        <br>
                    </p>
                        <h4>60%</h4>
                        <br>
                        <p>
                        Los teclados 60%  son aquellos que su tamaño es del 60% respecto a un teclado de tamaño completo. Estos se caracterizan por ser muy compactos y portables. Estos tienen las teclas de funciones especiales integrados en otras teclas y se usando usando la tecla espacial FN 
                        </p>
                        <br>
                    </div>
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