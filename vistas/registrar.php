<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- $sentencia='SELECT * from portatil cross join usuarios ' -->
    <script src="../javaScript/comprobar.js"></script>
</head>


<body ">
    <div class="cabecera">
        <?php
        require('../controlers/controler_user/controler_user.php');

        $cUser = new controler();
        if (isset($_POST['enviar'])) {
            $cUser->registrar();
        }
        ?>
        <h1>Crear cuenta</h1>




        <form action="" method="post">
            <label for="nombre">Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="correo" id="correo" required>
            <br>
            <labbel for="contra">Contraseña</labbel>
            <br>
            <input type="password" name="contra" id="contra" onblur="validadCOntraseña()" required>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>

        <p>
            Si ya tienes cuenta inicicia sesion aqui
            <a href="loging.php">Login</a>
        </p>
        <p>
            Vovler a la página de
            <a href="../index.php">
                inicio
            </a>
        </p>

    </div>
</body>
<style>
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