 <?php
// // echo "8. Ver Costo De Pasaje \n";

// function case8($viaje)
// {

//     echo "El costo del viaje sin descuentos es: " . $viaje->getCosto() . "\n";
//     echo "quiere ver el costo con descuento ?  si / no \n";
//     $result = trim(fgets(STDIN));

//     if ($result == "si") {
//         echo "Ingrese numero de Ticket ";
//         $ticket = trim(fgets(STDIN));

//         // recorro el arreglo y busco el num de ticket , si son iguales calculo el precio y si no hay le digo que no se encuentra registrado 

//         $encontrado = false;
//         $i = 0;

//         while ($i < $viaje->getMaximoPasajeros() && !$encontrado) {
//             $pasajero = $viaje->getColPasajeros()[$i];
//             if ($ticket == $pasajero->getNumTicket()) {
//                 $encontrado = true;
//             }
//             $i++;
//         }
//         if ($encontrado == true) {
//             echo "El precio es : " . $viaje->venderPasaje($pasajero) . "\n";
//         } else {
//             echo "no se encuentra registrado  \n";
//         }
//     }
// } 

function case8($viaje)
{
    echo "El costo del viaje sin descuentos es: " . $viaje->getCosto() . "\n";
    echo "Quiere ver el costo con descuento? si / no \n";
    $result = trim(fgets(STDIN));

    if ($result == "si") {
        echo "Ingrese numero de Ticket: ";
        $ticket = trim(fgets(STDIN));

        // Recorro el arreglo y busco el num de ticket , si son iguales calculo el precio y si no hay le digo que no se encuentra registrado 
        $encontrado = false;
        $i = 0;

        // $pasajeros = $viaje->getColPasajeros();

        $maxPasajeros = count($viaje->getColPasajeros());

        while ($i < $maxPasajeros && !$encontrado) {
            $pasajero = $viaje->getColPasajeros()[$i];
            if ($pasajero && $ticket == $pasajero->getNumTicket()) {
            echo "El precio es: " . $viaje->venderPasaje($pasajero) . "\n";

                $encontrado = true;
            }
            $i++;
        }
        if($encontrado == false){
            echo"no se encontro ";
        }
        

    }
}
