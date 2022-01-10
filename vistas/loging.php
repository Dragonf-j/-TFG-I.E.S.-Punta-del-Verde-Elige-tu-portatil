<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container cabecera">
        <?php
        require('../controlers/controler_user/controler_user.php');
        $cUser = new controler();
        if (isset($_POST['enviar'])) {
            $cUser->conectar();
        }
        ?>

        <h1>Inicia Sesion</h1>





        <form action="" method="post">

            <label for="email">Email</label>
            <br>
            <input type="email" name="correo" id="correo">
            <br>
            <labbel for="contra">Contraseña</labbel>
            <br>
            <input type="password" name="contra" id="contra">
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <p>SI no tienes cuenta puedes registrarte gratis aqui
            <a href="registrar.php">registrar</a>
        </p>
        <ul class="navbar-nav">
            <li class="nav-item">
                <p>
                    Vovler a la página de
                    <a href="../index.php">
                        inicio
                    </a>
                </p>
            </li>

        </ul>
    </div>
</body>
<style>
    div {
        align-items: center;
        justify-content: center;
     
    }

    h1 {
        border-bottom: 1px grey solid;
        text-align: center;

    }

    .cabecera {
        border: 1px grey solid;
        border-radius: 5px;
        margin-top: 50px;


    }

    form {
        
        margin-top: 50px;
        margin-left: 50px;
        margin-right: 50px;
        margin-bottom: 0px;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    p {
        font-size: 10px;
        margin-left: 50px;
    }

    body {
        background-color: rgb(34, 34, 34);
        color: rgb(223, 223, 223);
    }

    label {
        padding: 10px;

    }
</style>

</html>