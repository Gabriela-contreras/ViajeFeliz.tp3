<?php
// TP3 La clase Pasajero tiene como atributos el nombre, el número de asiento y el número de ticket del pasaje del viaje.

class Pasajero
{
    //  Objeto que tenga los atributos nombre, apellido, numero de documento y teléfono
    private $nombre;
    private $apellido;
    private $numDoc;
    private $telefono;
    private $numAsiento;
    private $numTicket;


    public function __construct(String $nombre, String $apellido, Int $numDoc, Int $telefono, Int $numAsiento, Int $numTicket)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numDoc = $numDoc;
        $this->telefono = $telefono;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
    }

    public function __toString()
    {
        return
            " 😄 Pasajero" . "\n" .
            "Nombre: " . $this->getNombre() . "\n" .
            "Apellido: " . $this->getApellido() . "\n" .
            "Número de documento: " . $this->getNumDoc() . "\n" .
            "Teléfono: " . $this->getTelefono() . "\n" .
            "Numero de Asiento: " . $this->getNumAsiento() . "\n" .
            "Numero de Ticket del Pasaje :  " . $this->getNumTicket() . "\n";
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($value)
    {
        $this->apellido = $value;
    }

    public function getNumDoc()
    {
        return $this->numDoc;
    }

    public function setNumDoc($value)
    {
        $this->numDoc = $value;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($value)
    {
        $this->telefono = $value;
    }

    public function getNumAsiento()
    {
        return $this->numAsiento;
    }

    public function setNumAsiento($value)
    {
        $this->numAsiento = $value;
    }

    public function getNumTicket()
    {
        return $this->numTicket;
    }

    public function setNumTicket($value)
    {
        $this->numTicket = $value;
    }

    //    Implementar el método darPorcentajeIncremento() que retorne el porcentaje que debe aplicarse como incremento según las 
    //    características del pasajero. Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas 
    //    supera a las 300 millas se realiza un incremento del 30%. Si el pasajero tiene necesidades especiales y requiere silla de ruedas, 
    //    asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados 
    //    entonces el incremento es del 15%. Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.
    public function darPorcentajeIncremento()
    {
        //importe normal 10% 0.1
        $importe=0.1;
        return $importe ;
    }
}
