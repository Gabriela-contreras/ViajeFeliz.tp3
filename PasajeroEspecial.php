<?php
include_once("Pasajero.php");
//   La clase Pasajeros con necesidades especiales se refiere a pasajeros que pueden requerir servicios especiales como sillas de ruedas,
//    asistencia para el embarque o desembarque, o comidas especiales para personas con alergias o restricciones alimentarias.  

//    Implementar el método darPorcentajeIncremento() que retorne el porcentaje que debe aplicarse como incremento según las 
//    características del pasajero. Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas 
//    supera a las 300 millas se realiza un incremento del 30%. Si el pasajero tiene necesidades especiales y requiere silla de ruedas, 
//    asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados 
//    entonces el incremento es del 15%. Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.

class PasajeroEspecial extends Pasajero
{

    private  $sillaRuedas;
    private $asistenciaEm;
    private $comidas;

    public function __construct($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket, $sillaRuedas, $asistenciaEm, $comidas)
    {
        parent::__construct($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket);
        $this->sillaRuedas = $sillaRuedas;
        $this->asistenciaEm = $asistenciaEm;
        $this->comidas = $comidas;
    }

    public function __toString()
    {
        return "😊 Pasajero" . "\n" .
            "Nombre :" . $this->getNombre() . "\n" .
            "Apellido : " . $this->getApellido() . "\n" .
            "Numero de Documento :" . $this->getNumDoc() ."\n".
            "Telefono : " . $this->getTelefono() . "\n" .
            "Numero de Asiento : " . $this->getNumAsiento() . "\n" .
            "Numero de ticket del pasaje : " . $this->getNumTicket() . "\n" .
            "Necesita sillas de ruedas: " . $this->getsillaRuedas() . "\n" .
            "Necesita ayuda en el embarque: " . $this->getAsistenciaEm() . "\n" .
            "Necesita comida especial: " . $this->getComidas() . "\n";
    }


    public function getsillaRuedas()
    {
        return $this->sillaRuedas;
    }

    public function setsillaRuedas($value)
    {
        $this->sillaRuedas = $value;
    }



    public function getAsistenciaEm()
    {
        return $this->asistenciaEm;
    }

    public function setAsistenciaEm($value)
    {
        $this->asistenciaEm = $value;
    }

    public function getComidas()
    {
        return $this->comidas;
    }

    public function setComidas($value)
    {
        $this->comidas = $value;
    }


    // Si el pasajero tiene necesidades especiales y requiere silla de ruedas, 
    //    asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados 
    //    entonces el incremento es del 15%.

    public function darPorcentajeIncremento()
    { //arreglar
        $incremento = 0;
        if ($this->getsillaRuedas() && $this->getAsistenciaEm() && $this->getComidas()) {
            $incremento = 0.3;
        } elseif ($this->getsillaRuedas() || $this->getAsistenciaEm() || $this->getComidas()) {
            $incremento = 0.15;
        }


        return $incremento;
    }
}
