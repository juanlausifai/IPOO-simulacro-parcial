<?php

class Basket extends Partido{

    private $cantInfraciones;
     
    public function __construct($idPartido,$fecha,$cantGolesE1,$cantGolesE2,$equipoUno,$equipoDos,$cantInfraciones)
   {
      parent::__construct($idPartido,$fecha,$cantGolesE1,$cantGolesE2,$equipoUno,$equipoDos); 

      $this->cantInfraciones = $cantInfraciones;
   } 

   /**
     * Get the value of cantInfraciones
     */ 
    public function getCantInfraciones()
    {
        return $this->cantInfraciones;
    }

    /**
     * Set the value of cantInfraciones
     */ 
    public function setCantInfraciones($cantInfraciones)
    {
        $this->cantInfraciones = $cantInfraciones;
    }



   public function coeficientePartido(){

        $coef = parent::coeficientePartido();
        $cantInfraciones = $this->getCantInfraciones();

        $coefBasket = $coef - $cantInfraciones * 0.75;

        return $coefBasket; 
   }



    
}