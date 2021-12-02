<?php
include("configuracion.php");

$connect = new mysqli($server,$user,$pass,$bd);

if($connect) {
    echo "Conectado al servidor";
}else {
    echo "Error al Conectar";
    exit();
}
?>
