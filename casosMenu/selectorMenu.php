<?php

function Selector()
{
    echo "\n-----MENU-----\n";
    echo "1. Modificar destino\n";
    echo "2. Modificar Cantidad maxima de pasajeros\n";
    echo "3. Agregar pasajeros\n";
    echo "4. Modificar Pasajero \n";
    echo "5. Ver datos del Responsable del viaje \n";
    echo "6. Modificar Responsable \n";
    echo "7. Ver datos del viaje \n";
    echo "8. Ver Costo De Pasaje \n";
    echo "9. Verificar si hay disponibilidad \n";
    echo "10. Salir \n";


    echo "ingrese opcion \n ";
    $opcion = trim(fgets(STDIN));
    return $opcion;
}
