<?php
    header("Content-Type: application/json");
    $jsonString = (string) '{"nombre":"Adrian Jesus Ochoa Fillippo","edad":16,"altura":1.80,"estudiante":true,"pasatiempos":["jugar","Dibujar"],"informacion":{"Direccion":"calle","Numero":11},"Animal":[{"Nombre":"Tita","Especie":"Canino"}]}';
    $decodificar = (array) json_decode($jsonString);
    //var_dump($decodificar->Animal[3]->Nombre); // default;
    // var_dump($decodificar["Animal"][2]["Nombre"]); //true
    $codificar = json_encode($decodificar,JSON_PRETTY_PRINT);
    

    
    $file = fopen("datos.json", "w+");
    fwrite($file, $codificar);
    fclose($file);
?>   