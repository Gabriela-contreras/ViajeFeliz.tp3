<?php
// modificar Pasajero 

include_once("Viaje.php");
//error en la ultima parte y el case4 tamb
function case4($viaje)
{
    echo "Ingrese el número de documento del pasajero que quiere editar: \n";
    $documentoPasajero = trim(fgets(STDIN));
    $objPasajero = $viaje->buscadorDePasajero($documentoPasajero);
    if ($objPasajero != null) {
        echo $objPasajero . "\n" .
            "1) Editar nombre \n" .
            "2) Editar apellido \n" .
            "3) Editar número de documento \n" .
            "4) Editar teléfono \n";
        $eleccion = trim(fgets(STDIN));
        switch ($eleccion) {
            case 1:

                $condicion = false;
                while ($condicion != true) {
                    echo "Ingrese Nombre del pasajero. \n";
                    $nom = trim(fgets(STDIN));
                    $condicion = false;
                    if (ctype_alpha($nom)) {
                        $objPasajero->setNombre($nom);
                        echo "Nombre modificado ✅\n";
                        $condicion = true;
                    } else {
                        echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
                    }
                }

                break;
            case 2:

                $condicion2 = false;
                while ($condicion2 != true) {
                    echo "Ingrese apellido del pasajero. \n";
                    $apellido = trim(fgets(STDIN));
                    $condicion2 = false;
                    if (ctype_alpha($apellido)) {
                        $objPasajero->setApellido($apellido);
                        echo "Apellido modificado✅ \n";
                        $condicion2 = true;
                    } else {
                        echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
                    }
                }

                break;
            case 3:
                $condicion3 = false;
                while ($condicion3 != true) {
                    echo "Ingrese el nuevo número de documento: \n";
                    $dni = trim(fgets(STDIN));
                    $condicion3 = false;
                    if (is_numeric($dni)) {
                        $objPasajero->setNumDoc($dni);
                        echo "Número de documento modificado✅ \n";
                        $condicion3 = true;
                    } else {
                        echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
                    }
                }

                break;
            case 4:
                $condicion4 = false;
                while ($condicion4 != true) {
                    echo "Ingrese el nuevo teléfono: \n";
                    $tel = trim(fgets(STDIN));
                    $condicion4 = false;
                    if (is_numeric($tel)) {
                        $objPasajero->setTelefono($tel);
                        echo "Teléfono modificado✅ \n";
                        $condicion4 = true;
                    } else {
                        echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
                    }
                }

                break;
            default:
                echo "Opción incorrecta ❌";
        }
    }
}
