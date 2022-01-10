<?php
$nombre_img = $_FILES['imagen']['name'];
echo $nombre_img;
$directorio = $_SERVER['DOCUMENT_ROOT'] . '/Dragonf/proyecto/img/';
move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$nombre_img);


require_once('../../models/portatilesCurd.php');
 $base = new PortatilCrud();

 $base->update($nombre_img);
