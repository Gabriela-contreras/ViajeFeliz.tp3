<?php
include_once("Viaje.php");
//error en la ultima parte y el case4 tamb
function case3($viaje)
{
    $respuesta = "no";

    while ($respuesta != "si") {
        $condicion = false;
        $pasajero = [];

        while ($condicion != true) {
            echo "ingrese los datos de los pasajeros. \n";
            echo "nombre del pasajero \n";
            $nombre = trim(fgets(STDIN));
            if (ctype_alpha($nombre)) {
                // $pasajero->setNombre($nombre);
                $nom = $nombre;
                // $viaje->agregarPasajero();
                $condicion = true;
            } else {
                echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion2 = false;
        while ($condicion2 != true) {
            echo "apellido del pasajero. \n";
            $apellido = trim(fgets(STDIN));
            $condicion2 = false;
            if (ctype_alpha($apellido)) {
                // $pasajero->setApellido($apellido);
                $ap = $apellido;
                $condicion2 = true;
            } else {
                echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion3 = false;
        while ($condicion3 != true) {
            echo "ingrese DNI. \n";
            $dni = trim(fgets(STDIN));
            $condicion3 = false;
            if (is_numeric($dni)) {
                // $pasajero->setNumDni($dni);
                $Doc = $dni;
                $condicion3 = true;
            } else {
                echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion4 = false;
        while ($condicion4 != true) {
            echo "ingrese Telefono. \n";
            $tel = trim(fgets(STDIN));
            if (is_numeric($tel)) {
                // $pasajero->setTelefono($tel);
                $telefono = $tel;
                $condicion4 = true;
            } else {
                echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion5 = false;
        while ($condicion5 != true) {
            echo "ingrese numero de asiento. \n";
            $numA = trim(fgets(STDIN));
            if (is_numeric($numA)) {
                // $pasajero->setTelefono($tel);
                $numAs = $numA;
                $condicion5 = true;
            } else {
                echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
            }
        }
        $condicion6 = false;
        while ($condicion6 != true) {
            echo "ingrese numero de Ticket. \n";
            $numT = trim(fgets(STDIN));
            if (is_numeric($numT)) {
                // $pasajero->setTelefono($tel);
                $numTi = $numT;
                $condicion6 = true;
            } else {
                echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
            }
        }
        echo "ingrese tipo de pasajero vip / especial / normal \n";
        $tipoPasajero = trim(fgets(STDIN));

        if ($tipoPasajero === "vip") {

            $condicion7 = false;
            while ($condicion7 != true) {
                echo "ingrese numero de Viajero Frecuente. \n";
                $numV = trim(fgets(STDIN));
                if (is_numeric($numT)) {
                    // $pasajero->setTelefono($tel);
                    $numVF = $numV;
                    $condicion7 = true;
                } else {
                    echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
                }
            }

            $condicion8 = false;
            while ($condicion8 != true) {
                echo "ingrese numero de cantidad de millas. \n";
                $cantMillas = trim(fgets(STDIN));

                if (is_numeric($numT)) {
                    // $pasajero->setTelefono($tel);
                    $cantM = $cantMillas;
                    $condicion8 = true;
                } else {
                    echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
                }
            }
            $pasajero = new PasajeroVip($nom, $ap, $Doc, $telefono, $numAs, $numTi, $numVF, $cantM);
            $result = $viaje->agregarPasajero($pasajero);

            # code...
        }
        if ($tipoPasajero === "especial") {
            $condicion9 = false;
            while ($condicion9 != true) {
                echo "ingrese si necesita silla de ruedas true /false . \n";
                $silla = trim(fgets(STDIN));
                if ($silla === "true" || $silla === "false") {
                    // $pasajero->setTelefono($tel);
                    $sillaR = $silla;
                    $condicion9 = true;
                } else {
                    echo "ingrese nuevamente lo pedido.\n";
                }
            }

            $condicion10 = false;
            while ($condicion10 != true) {
                echo "ingrese si necesita ayuda en zona de embarque  true / false . \n";
                $ayudaem = trim(fgets(STDIN));
                if ($ayudaem === "true" || $ayudaem === "false") {
                    // $pasajero->setTelefono($tel);
                    $ayudaE = $ayudaem;
                    $condicion10 = true;
                } else {
                    echo "ingrese nuevamente lo pedido (true / false).\n";
                }
            }

            $condicion11 = false;
            while ($condicion11 != true) {
                echo "ingrese si necesita comidas especificas  true / false . \n";
                $comidas = trim(fgets(STDIN));
                if ($comidas === "true" || $comidas === "false") {
                    // $pasajero->setTelefono($tel);
                    $com = $comidas;
                    $condicion11 = true;
                } else {
                    echo "ingrese nuevamente lo pedido (true / false).\n";
                }
            }
            $pasajero = new PasajeroEspecial($nom, $ap, $Doc, $telefono, $numAs, $numTi, $sillaR, $ayudaE, $com);
            $result = $viaje->agregarPasajero($pasajero);
        } else {
            $pasajero = new Pasajero($nom, $ap, $Doc, $telefono, $numAs, $numTi);
            $result = $viaje->agregarPasajero($pasajero);
        }

        if ($result == true) {
            echo "Se ha agregado con Exito ✅ \n";
        }
        if ($result == false) {
            echo " \n hubo un error , no se ha agregado .Seguro ya existe el pasajero \n ";
        }


        echo "\n dejar de ingresar pasajeros si / no .\n";
        $respuesta = trim(fgets(STDIN));
    }
    // return $colPasajeros;
}
