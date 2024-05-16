<?php
//"6. Modificar Responsable \n";

function case6($viaje)
{
    echo "Editar responsable de viaje \n" .
        "1) Editar número de empleado \n" .
        "2) Editar número de licencia \n" .
        "3) Editar nombre \n" .
        "4) Editar apellido \n";
    $eleccion = trim(fgets(STDIN));
    switch ($eleccion) {
        case 1:

            $condicion = false;
            while ($condicion != true) {
                echo "Ingrese el nuevo número de empleado: \n";
                $nuevoNumero = trim(fgets(STDIN));
                $condicion = false;
                if (is_numeric($nuevoNumero)) {
                    $viaje->getObjResponsable()->setNumEmpleado($nuevoNumero);
                    echo "Número de empleado modificado correctamente ✅ \n";
                    $condicion = true;
                } else {
                    echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
                }
            }

            break;
        case 2:
            $condicion1 = false;
            while ($condicion1 != true) {
                echo "Ingrese el nuevo número de licencia: \n";
                $nuevoNumero = trim(fgets(STDIN));
                $condicion1 = false;
                if (is_numeric($nuevoNumero)) {
                    $viaje->getObjResponsable()->setNumLicencia($nuevoNumero);
                    echo "Número de licencia modificado correctamente ✅ \n";
                    $condicion1 = true;
                } else {
                    echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
                }
            }
            break;

        case 3:

            $condicion3 = false;
            while ($condicion3 != true) {
                echo "Ingrese Nombre del pasajero. \n";
                $nom = trim(fgets(STDIN));
                $condicion3 = false;
                if (ctype_alpha($nom)) {
                    $viaje->getObjResponsable()->setNombre($nom);
                    echo "Nombre modificado correctamente ✅ \n";
                    $condicion3 = true;
                } else {
                    echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
                }
            }
            break;

        case 4:

            $condicion3 = false;
            while ($condicion3 != true) {
                echo "Ingrese Apellido del pasajero. \n";
                $Apellido = trim(fgets(STDIN));
                $condicion3 = false;
                if (ctype_alpha($Apellido)) {
                    $viaje->getObjResponsable()->setApellido($Apellido);
                    echo "Apellido modificado correctamente ✅ \n";
                    $condicion3 = true;
                } else {
                    echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
                }
            }
            break;

        default:
            echo "Opción incorrecta ❌";
    }
}
