
<?php 

class Partido{

    private $idPartido;
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;
    private $equipoUno;//objeto Equipo
    private $equipoDos;//objeto Equipo

    public function __construct($idPartido,$fecha,$cantGolesE1,$cantGolesE2,$equipoUno,$equipoDos)
    {
       $this ->idPartido = $idPartido;
       $this ->fecha = $fecha;
       $this ->cantGolesE1 = $cantGolesE1;
       $this ->cantGolesE2 = $cantGolesE2;
       $this ->equipoUno = $equipoUno;
       $this ->equipoDos = $equipoDos;
    }

    
    /**
     * Get the value of idPartido
     */ 
    public function getIdPartido()
    {
        return $this->idPartido;
    }

    /**
     * Set the value of idPartido
     */ 
    public function setIdPartido($idPartido)
    {
        $this->idPartido = $idPartido;
    }

    

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    

    /**
     * Get the value of cantGolesE1
     */ 
    public function getCantGolesE1()
    {
        return $this->cantGolesE1;
    }

    /**
     * Set the value of cantGolesE1
     *
     * @return  self
     */ 
    public function setCantGolesE1($cantGolesE1)
    {
        $this->cantGolesE1 = $cantGolesE1;
    }

    

    /**
     * Get the value of cantGolesE2
     */ 
    public function getCantGolesE2()
    {
        return $this->cantGolesE2;
    }

    /**
     * Set the value of cantGolesE2
     */ 
    public function setCantGolesE2($cantGolesE2)
    {
        $this->cantGolesE2 = $cantGolesE2;
    }

    /**
     * Get the value of equipoUno
     */ 
    public function getEquipoUno()
    {
        return $this->equipoUno;
    }

    /**
     * Set the value of equipoUno
     */ 
    public function setEquipoUno($equipoUno)
    {
        $this->equipoUno = $equipoUno;
    }

    /**
     * Get the value of equipoDos
     */ 
    public function getEquipoDos()
    {
        return $this->equipoDos;
    }

    /**
     * Set the value of equipoDos
     */ 
    public function setEquipoDos($equipoDos)
    {
        $this->equipoDos = $equipoDos;
    }


    public function __toString()
    {
        return "id:".$this->getIdPartido().
        ", fecha:".$this->getFecha().
        ", Goles E1:".$this->getCantGolesE1().
        ", Goles E2:".$this->getCantGolesE2().
        ", Equipo 1:".$this->getEquipoUno().
        ", Equipo 2:".$this->getEquipoDos();
    }
}