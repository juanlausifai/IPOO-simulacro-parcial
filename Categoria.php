<?php 

class Categoria{

    private $idCategoria;
    private $descripcion;

    public function __construct($idCategoria,$descripcion)
    {
        $this->idCategoria = $idCategoria;
        $this->descripcion = $descripcion;
    }

    /**
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function __toString()
    {
        return "idcategoria".$this->getIdCategoria().
        "Descripcion: ".$this->getDescripcion();
    }
}