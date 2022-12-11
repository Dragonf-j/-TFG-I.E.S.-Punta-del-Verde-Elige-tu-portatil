<!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Elige tu portatil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../../../estilos/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../estilos/estilos_elegir.css">
    <link rel="stylesheet" href="../../../estilos/estilos_main.css">
    <link rel="stylesheet" href="../../../estilos/estilos_get_all.css">
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
                                <a href="../../vistas_seleccionar/seleccionar_portatil.html" class="nav-link">

                                    Portátiles</a>
                            </li>
                            <li class="nav-item">
                                <a href="../../vistas_seleccionar/seleccionar_ratones.html" class="nav-link">

                                    Ratones</a>
                            </li>
                            <li class="nav-item">
                                <a href="../../vistas_seleccionar/seleccionar_teclados.html" class="nav-link">

                                    Teclados</a>
                            </li>
                            <li class="nav-item">
                                <a href="../../vistas_seleccionar/seleccionar_cascos.html" class="nav-link">

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
<main >
  <form method="POST">
            <select name="opciones" id="op">
                <option value="bajo">Precio mas bajo a mas caro</option>
                <option value="alto">Precio mas caro a mas bajo</option>
            </select>
           <input class="buttonEnviar" type="submit" value="enviar" name="enviar"> 
        </form>

  
    </div>
    
  
<!-- <h1 class="constuyendo "> En desarrollo</h1>
    <img src="../../../img/jim-carrey-bruce-almighty.gif" alt="Jim Carrey bebiendo cafe" class="cafe">


</div> -->

<?php
    require_once('../../../controlers/controler_keyboard/controlador.php');
    require_once('../../Vistas_dinamicas/montarTabla.php');

    $ckeyboard = new controladorKeyBoard();

    $datos = $ckeyboard->MostrarAll();

    montarTabla::montar($datos);

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
                            <a href="../privacidad.php" class="nav-link">

                                Privacidad</a>
                        </li>
                    </ul>

                </nav>
                <h6 class="copy">&copy; Todos los derechos reservados - Dragonf-j - <?php $year= date("Y"); echo $year;?></h6>
            </footer>
       
</body>


</html>