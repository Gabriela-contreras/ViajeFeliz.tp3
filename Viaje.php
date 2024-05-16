<?php

class Viaje
{
    /**
     * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
     */
    private $codigo;
    private $destino;
    private $maximoPasajeros;
    private $colPasajeros;
    private $objResponsable;
    private $costo;
    private $sumaCostos;

    public function __construct(Int $codigo, String $destino, Int $maximoPasajeros, array $colPasajeros, ResponsableV $objResponsable, Int $costo, Int  $sumaCostos)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maximoPasajeros = $maximoPasajeros;
        $this->colPasajeros = $colPasajeros;
        $this->objResponsable = $objResponsable;
        $this->costo = $costo;
        $this->sumaCostos = $sumaCostos;
    }


    public function ArrayToString($array)
    {
        $result = "";
        foreach ($array as  $value) {
            $result .= $value . " \n";
        }
        return $result;
    }

    public function __toString()
    {
        return
            "\n ✈️  Viaje" . "\n" .
            "Código de vuelo: " . $this->getCodigo() . "\n" .
            "Destino: " . $this->getDestino() . "\n" .
            "Máximo de pasajeros: " . $this->getMaximoPasajeros() . "\n" .
            "\n Responsable: \n" . $this->getObjResponsable() . "\n" .
            " \n Pasajeros: \n" . $this->ArrayToString($this->getColPasajeros()) . "\n";
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($value)
    {
        $this->codigo = $value;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function setDestino($value)
    {
        $this->destino = $value;
    }

    public function getMaximoPasajeros()
    {
        return $this->maximoPasajeros;
    }

    public function setMaximoPasajeros($value)
    {
        $this->maximoPasajeros = $value;
    }

    public function getColPasajeros()
    {
        return $this->colPasajeros;
    }

    public function setColPasajeros($value)
    {
        $this->colPasajeros = $value;
    }

    public function getObjResponsable()
    {
        return $this->objResponsable;
    }

    public function setObjResponsable($value)
    {
        $this->objResponsable = $value;
    }


    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($value)
    {
        $this->costo = $value;
    }

    public function getSumaCostos()
    {
        return $this->sumaCostos;
    }

    public function setSumaCostos($value)
    {
        $this->sumaCostos = $value;
    }



    //agregar Pasajero 
    //si se agrega bien devuelve un boolean 

   
    public function agregarPasajero($newPasajero)
{
    $agregado = false;
    $cantP = count($this->getColPasajeros());
    
    // Verificar si hay espacio para agregar más pasajeros
    if ($cantP < $this->getMaximoPasajeros()) {
        // Verificar si el nuevo pasajero tiene un número de documento diferente
        $documentoNuevo = $newPasajero->getNumDoc();
        $pasajeros = $this->getColPasajeros();
        $documentoExiste = false;

        foreach ($pasajeros as $pasajero) {
            if ($pasajero->getNumDoc() == $documentoNuevo) {
                $documentoExiste = true;
            }
        }

        // Si el documento no existe en la colección, agregar el nuevo pasajero
        if (!$documentoExiste) {
            $pasajeros[] = $newPasajero;
            $this->setColPasajeros($pasajeros);
            $agregado = true;
        }
    }

    return $agregado;
}

    public function buscadorDePasajero( $numeroDeDocumento){
        $colPasajeros = $this->getColPasajeros();
        $pasajeroEncontrado = null;
        $encontrado = false;
        $i = 0;
        while (!$encontrado && count($this->getColPasajeros()) > $i){
            if ($colPasajeros[$i]->getNumDoc() == $numeroDeDocumento){
                $encontrado = true;
                $pasajeroEncontrado = $colPasajeros[$i];
            }
            $i++;
        }
        return $pasajeroEncontrado;
    }


    //modificar responsable 
    public function modificarResponsable($newObjResponsable)
    {
        $bandera = false;
        if ($this->getObjResponsable()) {
            $this->setObjResponsable($newObjResponsable);
            $bandera = true;
        }
        return $bandera;
    }


    //modificar Destino 
    public function modificarDestino($destinoNew)
    {
        $condiction = false;
        if (preg_match('/^[a-zA-Z\s]+$/', $destinoNew)) {
            $this->setDestino($destinoNew);
            $condiction = true;
        }
        return $condiction;
    }

    //modificar cantMax de pasajeros 
    public function modificarCantMax($cantMax)
    {
        $condiction = false;
        if (is_numeric($cantMax)) {
            $this->setMaximoPasajeros($cantMax);
            $condiction = true;
        }
        return $condiction;
    }

    // Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por 
    // los pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero
    //  a la colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y
    //   retornar el costo final que deberá ser abonado por el pasajero.

    public function venderPasaje($objPasajero)
    {

        $this->agregarPasajero($objPasajero);
        $incremento = $objPasajero->darPorcentajeIncremento();
        $suma = ($incremento * $this->getCosto()) + $this->getCosto();
        $this->setCosto($suma);
        $acum = $this->getSumaCostos();
        $acum .= $suma;
        $this->setSumaCostos($acum);
        return $suma;
    }
    // Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del 
    // viaje es menor a la cantidad máxima de pasajeros y falso caso contrario

    public function hayPasajesDisponible()
    {
        $cantPasajeros = count($this->getColPasajeros());
        $result = false;
        if ($cantPasajeros < $this->getMaximoPasajeros()) {
            $result = true;
        }
        return $result;
    }
}
