<?php
session_start();
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

</head>
<style>

</style>

<body>
    <header class="container-fluid cabecera">

        <h1>Elige tu portátil</h1>
        <!-- <div>
            <a href="loging.php">Inicia sesion</a>
            <a href="registrar.php">Registrate</a>
        </div> -->
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
                                Tipos portátiles</a>
                        </li>
                       
                    </ul>
                <!-- </div>
                <?php
                // if (!isset($_SESSION["usuario"])) {
                //     echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">';
                //     echo ' <a href="loging.php">Inicia sesion</a>';
                //     echo  '<a href="registrar.php">Registrate</a>';
                //     echo '</div>';
                // }else{
                //     echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">';
                //     echo '<p> Bienvenido '. $_SESSION["usuario"].'</p>';
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

    <div>
        <div class="container bg-light d-flex flex-column justify-content-around ">
            <form action="" method="POST" class="grid">

                <div class="form-check " id="tipos">
                    <label for="Tipo"><h4>Tipos</h4></label><br>
                    <label for="gaming">Gaming</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="gaming">
                    <br>
                    <label for="basico">Básico</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="basico">
                    <br>
                    <label for="workstation">Workstation</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="workstation">
                    <br>
                    <label for="Convertible">2 en 1</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="Convertible">

                </div>



                <div class="form-check " id="almacenamiento">
                    <label for="Almacenamiento"><h4>Almacenamiento</h4></label><br>
                    <label for="menos">250 GB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="250GB">
                    <br>
                    <label for="medio">500 GB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="500GB">
                    <br>
                    <label for="max">1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="1TB">
                    <br>
                    <label for="max-extend">+1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="+1TB">
                </div>

                <div class="form-check thumbnail" id="ram">
                    <label for="ram"><h4>RAM</h4>

                      
                    </label><br>
                    <!-- <label for="4">4</label>
                    <input type="radio" class="form-check-input" name="memoria" value="4">
                    <br> -->
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
                    <label for="precio"><h4>Presupuesto</h4>
                        
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
                    <label for="Pulgadas"> <h4 class=" thumbnail">Pulgadas</h4>

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
                <!-- <div class="form-check" id="hz">
                    <label for="hz"><h4>Hercios</h4>

                    </label><br>
                    <label for="estandar">Estandar</label>
                    <input type="radio" class="form-check-input" name="hz" value="estandar">
                    <br>
                    <label for="medio">Competición</label>
                    <input type="radio" class="form-check-input" name="hz" value="medio">
                    <br>
                    <label for="alto">Alta competición</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="hz" value="alto">
                    <br>

                </div> -->




                <input class="boton" type="submit" value="mostrar" name="mostrar">


            </form>




        </div>

        <div class="container bg-light p-2 ms-auto principal thumbnail">

            <?php
            require_once('../controlers/controlador.php');
            $cLaptop = new ControladorPortatil();
            require_once('/xampp/htdocs/Dragonf/proyecto/models/model_laptop_user/userLapCrud.php');
            require_once('/xampp/htdocs/Dragonf/proyecto/models/model_laptop_user/lap_user.php');

            $lup = new userLapCrud();
            var_dump($cLaptop->mostrar());


            if (isset($_POST['mostrar'])) {

                $lap = $cLaptop->mostrar();
                montarTabla::montar($lap);
                if (isset($_SESSION["usuario"])) {
                    $user = $_SESSION["usuario"];
                    foreach ($lap as $key => $value) {
                        $id = $value['id'];
                    }
                    // var_dump($id);
                    $id2 = (int)$id;
                    // var_dump($id2);
                    // echo $user;
                    
                    
                    $lup->anadir( $user,$id2);
                }
            }
          
            ?>

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
    .grid {
        display: inline-grid;
        grid-template-columns: auto auto auto;
        gap: 15px;
        /* margin: 10px; */

    }

    .boton {
        grid-column: 1 / span 3;
        grid-row: 4;
        width: 20%;
        align-items: center;
        border-top: 1px solid grey;
    }
    .conte{
        grid-column: 1 / span 3;
    }

    /* .principal {
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-column-gap: 5px
    } */

    .tabla {
        border: 1px black solid;
        padding: 8vh;
    }

    /* footer{
        bottom: 0;
        position: fixed;
        width: 100%;
    } */
    /* .container{
        height: 100vh;
    } */
    #boton {
        display: grid;
        grid-template-columns: 20%;
        /* margin-top: 20px; */

    }
  
    @media only screen and (max-width: 600px) {
        .grid {
        display: grid;
        grid-template-columns: 40% 40%;
        margin: 10px;

    }
}
 
</style>

</html>