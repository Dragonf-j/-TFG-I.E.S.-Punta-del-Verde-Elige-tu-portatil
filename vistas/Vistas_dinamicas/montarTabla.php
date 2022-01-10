<?php

class montarTabla
{
    public static function montarIndex($datos)
    {
?>

        <div class="thumbnail">
            <?php
            foreach ($datos as $key => $value) {


                if ($key == 0) {

                    echo '<table>';
                    echo '<tr>';


                    foreach ($value as $k1 => $v1) {

                        echo '<th>';
                        echo $k1;
                        echo '</th>';
                    }
                    echo '</tr>';
                }

                echo '<tr>';

                foreach ($value as $k1 => $v1) {

                    echo '<td>';
                    echo $v1;
                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>





        </div>

        <?php

    }

    public static function montar($datos)
    {

        foreach ($datos as $key => $value) {
            $nombre = $value['nombre'];
            $img = $value["imagen"];
            $tipo = $value['tipo'];
            $ram = $value['ram'];
            $enlaceA = $value['enlace_amazon'];
            $precioa = $value['precio_amazon'];
            //se rompen los enlaces de pc componentes
            // $enlacePc = $value['enlace_pccomponetes'];
            // $preciop = $value['precio_pcpcomponentes'];
            $almacenamiento = $value['almacenamiento'];
            $desc = $value['Descripcion'];


        ?>
            <div class="contenedor">
                <h3 class="container bg-light p-2 ms-auto h3"><?php echo $nombre; ?></h3>
                <?php
                ?> <h4>TIpo: <?php echo $tipo; ?></h4>
                <h6>Precio: <?php echo $precioa; ?>€</h6>
                <?php
                ?> <p>Memoria RAM: <?php echo $ram; ?>GB</p>
                <?php
                ?>
                <p>Almacenamiento en disco: <?php echo $almacenamiento; ?></p>
                <img class="img-responsive img-thumbnail est" src="../img/<?php echo $img; ?>" alt="img">
                <?php echo '<br>'; ?>
                <button class="btn btn-outline-secondary">
                    <a class="nav-link" id="enlace"   href="<?php echo $enlaceA; ?>" onclick="arbir()">Amazon</a>

                </button>
                <h6>Descripción</h6>
                <p> <?php echo $desc; ?></p>
            </div>

<?php
        }
    }
    public static function montar2($datos)
    {

        foreach ($datos as $key => $value) {
            $nemail = $value['email_user'];
            $his = $value["historico"];

            ?>
            <div class="contenedor">
                <!-- <h3 class="container bg-light p-2 ms-auto h3">Usuario<?php echo $nemail; ?></h3> -->
               
                

            </div>
            
                        <?php  echo $his;?>
               
<?php
           
        }
    }
}
?>
<style>
    .est {
        align-items: center;
        justify-content: center;
    }

    .contenedor {
        border: 1px solid black;
        text-align: center;
    }
</style>
<script src="../../javaScript/abrir.js"></script>