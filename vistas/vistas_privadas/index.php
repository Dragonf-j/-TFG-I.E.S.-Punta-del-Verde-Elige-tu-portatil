
<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Elige tu portatil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- comentario -->
<body>
    <header class="container-fluid cabecera">

        <h1>Elige tu portátil</h1>

        <nav class="navbar navbar-expand-sm  navbar-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="vistas/tipos.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                </svg>
                                Tipos portátiles</a>
                        </li>
                        <li class="nav-item">
                            <a href="vistas/elegir.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                Elige tu portátil</a>
                        </li>
                    </ul>
                </div>
                <?php
                if (!isset($_SESSION["usuario"])) {
                    echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">';
                    echo ' <a href="vistas/loging.php">Inicia sesion</a>';
                    echo  '<a href="vistas/registrar.php">Registrate</a>';
                    echo '</div>';
                }else{
                    echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">';
                    echo '<p> Bienvenido '. $_SESSION["usuario"].'</p>';
                    echo '<br>';
                    echo '<button type="submit">';
                    echo '<a href="vistas/destruir.php">Desconectar</a>';
                    echo '</button>';
                 
                    echo '</div>';
                }
                ?>

            </div>
        </nav>


    </header>

    <?php
    // session_start();

    if (!isset($_SESSION["usuario"])) {
    ?>
        <div class="container container-fluid bg-light p-2 ms-auto principal thumbnail">
            <h2 class="h2">Vaya parece que no hay Registros</h2>
            <!-- <img src="img/gif/PowerlessFlippantGenet-size_restricted.gif"  class="img-responsive img-thumbnail" alt=""> -->
            <p>Para poder ver tu historial de portátiles debes registrarte o iniciar sessión</p>
            <img src="img/gif/8757eeeee94c358e7be40b212dc79203.gif" alt="">
        </div>
    <?php

    } else {
        // 
    ?>
        <div class="container container-fluid bg-light p-2 ms-auto principal thumbnail">
        <?php

        // echo "Hola Usuario: " . $_SESSION['usuario']."<br>";
      


        require_once('models/model_laptop_user/userLapCrud.php');
        $usuario = $_SESSION['usuario'];
        echo '<h4>Usuario '.$usuario.'</h4>';
//         $ulc = new userLapCrud();
        $datos = $ulc->mostrar($usuario);
        require_once('vistas/Vistas_dinamicas/montarTabla.php');
        // var_dump($datos);
        if ($datos == null) {
            echo '<img src="img/gif/8757eeeee94c358e7be40b212dc79203.gif" alt="Gif de los pinguinos de magadascar diciendo que no has visto nada">';
        } else {
            montarTabla::montarIndex($datos);
        }
    }
  

        ?>


    



        </div>
        <!-- <footer class="has-sticky-footer">
        <div>
            <div>
                <h6>Redes sociales</h6>
            </div>
            hola
            <div>
                <h6>About</h6>
            </div>
        </div>
        </footer> -->
</body>
<style>
    .tabla {

        padding: 8vh;

    }

    h2 {

        border-bottom: 1px black solid;
        height: 5vh;
        text-align: center;
        grid-column: 1 / span 3;
        grid-row: 1;
    }
    h4{
        text-align: center;
    }

    /* footer{
        bottom: 0;
        position: fixed;
        width: 100%;
    } */
    img {
        width: 100%;
    }
</style>
<script>


</script>

</html>