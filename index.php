<?php
include_once("Class_semaforo/semaforo.php");
$nuevoSemaforo=new Semaforo();
$nuevoSemaforo->setCodigo("345");
echo $nuevoSemaforo->estado;
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";