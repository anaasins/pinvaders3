<?php
/**
 * Creacion de la clase ia
 */
class ia
{
    //Propiedades Fila i Columna
  public $Columna = '2';
  public $Fila = '3';

    //Declaracion de los metodos

  public function getColumna() {
    $this->Columna = rand (1,3);
    return $this->Columna;
  }

  public function getFila() {
    $this->Fila = rand (1,3);
    return $this->Fila;
  }

}

 ?>
