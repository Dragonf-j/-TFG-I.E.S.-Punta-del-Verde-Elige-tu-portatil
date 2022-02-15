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
        if($datos!=0){
            foreach ($datos as $key => $value) {
           
                $enlace = $value['enlace'];
            }
        

        ?>
            <div class="contenedor">
                <?php
                    echo $enlace;
                ?>
            </div>

    <?php
        }else{
                echo "No hay equipos con esas caracteristicas";
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