<?php

function case2($viaje)
{

    $condicion = false;
    while ($condicion != true) {
        echo "Ingrese nueva Cantidad maxima de pasajeros. \n";
        $nuevaCantMax = trim(fgets(STDIN));
        $viaje->modificarCantMax($nuevaCantMax);


        if ($viaje->modificarCantMax($nuevaCantMax) == true) {
            echo "Se modifico correctamente ✅";
            $condicion = true;
        } else {
            echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
        }
    }
}
