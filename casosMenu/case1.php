<?php

function case1($viaje)
{
    $condiction = false;
    while ($condiction != true) {
        echo "Ingrese el nuevo destino: \n";
        $nuevoDestino = trim(fgets(STDIN));
        $viaje->modificarDestino($nuevoDestino);
        if ($viaje->modificarDestino($nuevoDestino) == true) {
            echo "Se modifico exitosamente ✅";
        } else {
            echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
        }
        $condiction=true;
    }
}
