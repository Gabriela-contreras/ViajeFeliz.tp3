<?php
//  La clase "PasajeroVIP" tiene como atributos adicionales el número de viajero frecuente y cantidad de millas de pasajero
class PasajeroVip extends Pasajero
{
    private $numViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillas)
    {
        parent::__construct($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket);
        $this->numViajeroFrecuente = $numViajeroFrecuente;
        $this->cantMillas = $cantMillas;
    }
public function __toString(){

    return " 😄 Pasajero" . "\n" .
    "Nombre : " . $this->getNombre(). "\n". 
    "Apellido : " . $this->getApellido(). "\n" . 
    "Numero de Documento :" . $this->getNumDoc().
    "Telefono : ". $this->getTelefono(). "\n" . 
    "Numero de Asiento : " . $this->getNumAsiento(). "\n" . 
    "Numero de ticket del pasaje : ". $this->getNumTicket()."\n".
    "Numero de viajero frecuente :" . $this->getNumViajeFrecuente().  " \n" .
    "Cantidad de Millas :" . $this->getCantMillas() ."\n";


}
    public function getNumViajeFrecuente()
    {
        return $this->numViajeroFrecuente;
    }

    public function setNumViajeFrecuente($value)
    {
        return $this->numViajeroFrecuente = $value;
    }
    public function getCantMillas()
    {
        return $this->cantMillas;
    }

    public function setCantMillas($value)
    {
        return $this->cantMillas = $value;
    }
//polimorfismo 

public function darPorcentajeIncremento(){
    $incremento = 0.35; // Incremento del 35% para pasajeros VIP
        if ($this->getCantMillas()> 300) {
            $incremento .= 0.30; // Incremento adicional del 30% si las millas superan las 300
        }
        return $incremento;
}
    
}
//    Implementar el método darPorcentajeIncremento() que retorne el porcentaje que debe aplicarse como incremento según las 
//    características del pasajero. Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas 
//    supera a las 300 millas se realiza un incremento del 30%. Si el pasajero tiene necesidades especiales y requiere silla de ruedas, 
//    asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados 
//    entonces el incremento es del 15%. Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.