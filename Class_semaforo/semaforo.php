<?php
class Semaforo{
    /* Estados */
    private  $codigo;
    private  $estado;
    private  $coloresLuces=array("rojo","amarillo","verde","amarillo");
    /* Metodos */
    public function __construct(){
     $this->estado="rojo" ; 
    }
    public function suspension(){
        $this->estado="amarillo";
    }
    /*Metodos Setters (modificar)*/
    public function setCodigo($nuevoCodigo){
        $this->codigo=$nuevoCodigo;
    }
    public function setEstado($nuevoEstado){
        $this->estado=$nuevoEstado;
    }
    /*Metodos Getters (leer)*/
    public function getCodigo(){
       return $this->codigo;
    }
    public function getEstado(){
       return $this->estado;
    }
    public function cambiarEstado(){
        $luz=array_shift($this->coloresLuces);
        array_push($this->coloresLuces,$luz);
        return $this->coloresLuces[0];
    }
}