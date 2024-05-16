<?php
include_once("Viaje.php");
include_once("Pasajero.php");
include_once("PasajeroVip.php");
include_once("PasajeroEspecial.php");
include_once("ResponsableV.php");
include_once("./casosMenu/selectorMenu.php");
include_once("./casosMenu/case1.php");
include_once("./casosMenu/case2.php");
include_once("./casosMenu/case3.php");
include_once("./casosMenu/case4.php");
include_once("./casosMenu/case5.php");
include_once("./casosMenu/case6.php");
include_once("./casosMenu/case7.php");
include_once("./casosMenu/case8.php");
include_once("./casosMenu/case9.php");




// Implementar un script testViaje.php que cree una instancia de la
// clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
$pasajero1 = new Pasajero("Gabriela", "Contreras", 45732848, 2995954317, 12, 5656);
$pasajero2 = new Pasajero("Gabriela", "gutierrez", 45886532, 566532533, 2, 454);
$pasajero3= new PasajeroVip("juan", "cruz", 4454545, 485569635, 6, 222, 25,485);
$pasajero4= new PasajeroEspecial("sofia" , "barrera", 555656456 , 56828662, 888, 77,true,true,false);
//Menu
$colPasajeros = [$pasajero1, $pasajero2 ,$pasajero3,$pasajero4];
//creo responsable
$responsable = new ResponsableV(5, 120, "samuel", "correa");
// echo $responsable;

//creo viaje 
$viaje = new Viaje(103, "Bahamas", 20, $colPasajeros, $responsable, 220, 10);
echo $viaje;
// print_r($colPasajeros);

// echo $responsable->__toString();


// echo $pasajero;

$opcion;

while ($opcion != 10) {

    $opcion = Selector();

    switch ($opcion) {
        case 1:
            $casos = case1($viaje);
            break;

        case 2:
            $casos = case2($viaje);
            break;

        case 3:
            $casos = case3($viaje);
            break;

        case 4:
            $casos = case4($viaje);
            break;

        case 5:
            $casos = case5($viaje);

            break;
        case 6:
            $casos = case6($viaje);
            break;

        case 7:
            $casos = case7($viaje);

            break;

        case 8:
            $casos = case8($viaje);
            break;

        case 9:
            $casos = case9($viaje);
            break;
    }
}
// La empresa de transporte desea gestionar la información correspondiente a los pasajeros de los Viajes que pueden ser:
//      Pasajeros estándares, Pasajeros VIP y Pasajeros con necesidades especiales. 

// La clase Pasajero tiene como atributos el nombre, el número de asiento y el número de ticket del pasaje del viaje.

//  La clase "PasajeroVIP" tiene como atributos adicionales el número de viajero frecuente y cantidad de millas de pasajero.

//   La clase Pasajeros con necesidades especiales se refiere a pasajeros que pueden requerir servicios especiales como sillas de ruedas,
//    asistencia para el embarque o desembarque, o comidas especiales para personas con alergias o restricciones alimentarias.  

//    Implementar el método darPorcentajeIncremento() que retorne el porcentaje que debe aplicarse como incremento según las 
//    características del pasajero. Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas 
//    supera a las 300 millas se realiza un incremento del 30%. Si el pasajero tiene necesidades especiales y requiere silla de ruedas, 
//    asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados 
//    entonces el incremento es del 15%. Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.


// Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros e implementar el método 
// venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros ( solo si hay espacio disponible), actualizar 
// los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.


// Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad 
// máxima de pasajeros y falso caso contrario