<?php
    header("Content-Type: application/json");
    $data = (object) [];
    $data->nombre = (string) "Adrian Jesus Ochoa Fillippo";
    $data->edad = (int) 16;
    $data->altura = (float) 1.80;
    $data->estudiante = (bool) true;
    $data->pasatiempo = (array) [
        (string) "jugar",
        (string) "dibujar"
    ];
    $data->Animal = (array) [
        (object) [
            "Nombre" => (string) "Tita", 
            "Especie" => (string) "Canino"]
    ];
   


    $codificar = json_encode($data, JSON_PRETTY_PRINT);
    
    $file = fopen("datos.json", "w+");
    fwrite($file, $codificar);
    fclose($file);
?>   