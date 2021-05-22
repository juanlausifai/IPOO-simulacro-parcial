<?php

class Futbol extends Partido{
     
   public function __construct($idPartido,$fecha,$cantGolesE1,$cantGolesE2,$equipoUno,$equipoDos)
   {
      parent::__construct($idPartido,$fecha,$cantGolesE1,$cantGolesE2,$equipoUno,$equipoDos); 
   } 

   public function coeficientePartido(){

        $coef = parent::coeficientePartido();

        //Con una sola categoria me alcanza, ya que los 2 tienen que estar en la misma para poder jugar
        $categoriaEquipoUno = $this->getEquipoUno()->getObjCategoria()->getIdCategoria();

        if ($categoriaEquipoUno == "Menores") {
            $coefCat = 0.11;
        }elseif($categoriaEquipoUno == "Juveniles"){
            $coefCat = 0.17;
        }elseif($categoriaEquipoUno == "Mayores"){
            $coefCat = 0.23;
        }

        $coefFutbol = $coef + $coef * $coefCat;
        
        return $coefFutbol;

   }


}