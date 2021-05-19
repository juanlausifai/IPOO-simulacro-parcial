<?php 

class Torneo{

    private $coleccionPartido;
    private $importe;

    public function __construct($coleccionPartido,$importe)
    {
        $this->coleccionPartido = $coleccionPartido;
        $this->importe = $importe;
    }


    /**
     * Get the value of coleccionPartido
     */ 
    public function getColeccionPartido()
    {
        return $this->coleccionPartido;
    }

    /**
     * Set the value of coleccionPartido
     */ 
    public function setColeccionPartido($coleccionPartido)
    {
        $this->coleccionPartido = $coleccionPartido;
    }

    /**
     * Get the value of importe
     */ 
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set the value of importe
     */ 
    public function setImporte($importe)
    {
        $this->importe = $importe;
    }


    public function __toString()
    {
        return "Coleccion de partidos: ".$this->getColeccionPartido().
        "Importe: ".$this->getImporte();
    }

}