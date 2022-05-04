<?php
    header("Content-Type: application/json");
    $datos = file_get_contents("datos.json");
    $decodificar = json_decode($datos);

    var_dump($decodificar)

?>   