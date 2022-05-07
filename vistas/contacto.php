<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Elige tu portátil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='../javaScript/elegir.js'></script>
    <script src='../javaScript/ajax.js'></script>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="../estilos/estilos_mail.css">
    <link rel="stylesheet" href="../estilos/estilos_main.css">
    <link rel="stylesheet" href="../estilos/estilos_elegir.css">
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
<style>

</style>

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
                                <a href="vistas_busqueda/elegir.php" class="nav-link">

                                    Portátiles</a>
                            </li>
                            <li class="nav-item">
                                <a href="vistas_busqueda/elegir_raton.php" class="nav-link">

                                    Ratones</a>
                            </li>
                            <li class="nav-item">
                                <a href="vistas_busqueda/elegir_teclado.php" class="nav-link">

                                    Teclados</a>
                            </li>
                            <li class="nav-item">
                                <a href="vistas_busqueda/elegir_cascos.php" class="nav-link">

                                    Auricurales</a>
                            </li>


            </nav>
            <!-- Checkbox desactivado temporalmente -->
            <!-- <div class="inter">
                <label class="switch">
                    <input type="checkbox">
                    <div class="slider round"></div>
                </label>
            </div> -->
        </div>

    </header>
    <main>
    <div class="container contenedor bg-grey d-flex flex-column justify-content-around ">
        <h2>Contacto</h2>
        <form action="" method="post">
            <label for="mail">
                <h5 class="titutlo5"> Email: </h5>
                <input type="mail" name="nombre" id="mail" required>

            </label>
            <br>
            <label for="asunto">
                <h5 class="titutlo5">Asunto:</h5>
                <input type="text" name="asunto" id="asunto" required>
            </label>
            <br>
            <label for="mensaje">
                <h5 class="titutlo5">Mensaje:</h5>
                <textarea name="mensaje" id="" cols="30" rows="10" required></textarea>
            </label>
            <br>
            <input type="submit" value="Enviar" class="boton">

        </form>
        <?php
        require_once("../controlers/controlador_mail/controlador_mail.php");
        if (isset($_POST['nombre']) && isset($_POST['asunto']) && isset($_POST['mensaje'])) {
            $controler_mail = new mensaje();
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $mensae = $_POST['mensaje'];

            $mail = new mensaje();
            $mail->enviarMensaje($nombre, $asunto, $mensae);
        }
        ?>
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
                    <a href="privacidad.php" class="nav-link">

                        Privacidad</a>
                </li>
            </ul>

        </nav>
        <h6 class="copy">&copy; Todos los derechos reservados - Dragonf-j - 2022</h6>
    </footer>
</body>


</html>