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

    public function ingresarPartido($objEquipoUno,$objEquipoDos,$fecha,$tipo){
        
        $coleccionPartidos = $this->getColeccionPartido();

        $idPartido = count($this->getColeccionPartido());
        
        $categoriaEquipoUno = $objEquipoUno->getObjCategoria()->getIdCategoria();
        $categoriaEquipoDos = $objEquipoDos->getObjCategoria()->getIdCategoria();
        $cantJugadoresEquipoUno=$objEquipoUno->getCantJugadores();
        $cantJugadoresEquipoDos=$objEquipoDos->getCantJugadores();

        $mismaCategoria=$categoriaEquipoUno==$categoriaEquipoDos;
        $mismaCantidadJugadores = $cantJugadoresEquipoUno==$cantJugadoresEquipoDos;

        if ($mismaCategoria && $mismaCantidadJugadores) {
           
            if ($tipo == "Futbol") {

                $partido = new Futbol($idPartido,$fecha,0,0,$objEquipoUno,$objEquipoDos);
     
             }else if($tipo == "Basket"){
                 $partido = new Basket($idPartido,$fecha,0,0,$objEquipoUno,$objEquipoDos,0);
             }

             array_push($coleccionPartidos, $partido);
             $this->setColeccionPartido($coleccionPartidos);
        }
    }


    public function darGanadores($deporte){

        $coleccionPartidos = $this->getColeccionPartido();
        $darGanadores=[];

        foreach ($coleccionPartidos as $objPartido) {
            
            if (get_class($objPartido) == $deporte) {
                
                if ($objPartido->getCantGolesE1() > $objPartido->getCantGolesE2()) {
                    $equipoGanador = $objPartido->getEquipoUno();
                }else{
                    $equipoGanador = $objPartido->getEquipoDos(); 
                }

                array_push($darGanadores,$equipoGanador); 
            }

        }

        return $darGanadores;

    }


    public function calcularPremioPartido($ObjPartido){

        if ($ObjPartido->getCantGolesE1() > $ObjPartido->getCantGolesE2()) {
            $equipoGanador = $ObjPartido->getEquipoUno();
        }else{
            $equipoGanador = $ObjPartido->getEquipoDos();
        }

        $premio = $this->getImporte() + $ObjPartido->coeficientePartido();

        $arrayResultado = array("equipoGanador"=>$equipoGanador,"premioPartido"=>$premio);

        return $arrayResultado; 
    }


    public function __toString()
    {
        return "Coleccion de partidos: \n".$this->coleccionAString().
        "Importe: ".$this->getImporte();
    }


    public function coleccionAString()
    {
        $coleccion = $this->getColeccionPartido();
        $retorno = "";
        for ($i = 0; $i < count($coleccion); $i++) {
            $retorno .=   $coleccion[$i] . "\n--------------------\n";
        }
        return $retorno;
    }

}