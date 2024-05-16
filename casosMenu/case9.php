<?php
//hay disponibilidad o no en el viaje 
function case9($viaje)
{

    if ($viaje->hayPasajesDisponible() == true) {
        echo "Hay disponibilidad  ✅\n";
    } else {
        echo " No hay mas lugar ";
    }
}
