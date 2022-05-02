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
    <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/safe-tcf-v2.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/ccpa/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
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
                                <a href="elegir.php" class="nav-link">

                                    Portátiles</a>
                            </li>
                            <li class="nav-item">
                                <a href="elegir_raton.php" class="nav-link">

                                    Ratones</a>
                            </li>
                            <li class="nav-item">
                                <a href="elegir_teclado.php" class="nav-link">

                                    Teclados</a>
                            </li>
                            <li class="nav-item">
                                <a href="elegir_cascos.php" class="nav-link">

                                    Auricurales</a>
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
                    <div class="form-check" id="tipo">
                        <label for="Tipo">
                            <h4>Tipos</h4>
                        </label><br>
                        <label for="gaming" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Gaming
                        </label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="gaming">
                        <br>
                        <label for="basico" data-bs-toggle="tooltip" data-bs-placement="top" title="Prueba 2">Básico</label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="basico">
                        <br>
                        <label for="workstation">Workstation</label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="workstation">
                        <br>
                        <label for="Convertible">2 en 1</label>
                        <input type="radio" class="form-check-input" class="tipo" name="tipo" value="Convertible">

                    </div>



                    <div class="form-check " id="almacenamiento">
                        <label for="Almacenamiento">
                            <h4>Almacenamiento</h4>
                        </label><br>
                        <label for="menos">250 GB</label>
                        <input type="radio" class="form-check-input" name="almacenamiento" value="250GB">
                        <br>
                        <label for="medio">500 GB</label>
                        <input type="radio" class="form-check-input" name="almacenamiento" value="500GB">
                        <br>
                        <label for="max">1 TB</label>
                        <input type="radio" class="form-check-input" name="almacenamiento" value="1TB">
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





                    <input class="boton" type="submit" value="Buscar" name="mostrar">


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

</footer>
</body>


</html>