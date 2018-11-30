<?php
include_once("semaforo.php");
class SemaforoContador extends Semaforo{
    private $contador;
    public function setContador($nuevoContador){
        $this->contador=$nuevoContador;
    }
    public function getContador(){
        return $this->contador;
    }
    public function disminirContador(){
      return  $this->contador=$this->contador-1;
    }
}