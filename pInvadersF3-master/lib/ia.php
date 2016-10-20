<?php
/**
 * Creacion de la clase ia. Ana Asins.
 */
class ia
{
    //Propiedades Fila i Columna
  public $Columna =3;
  public $Fila =1;

    //Declaracion de los metodos

  public function getColumna() {
    return $this->Columna;
  }

  public function getFila() {
    return $this->Fila;
  }
//Creación de setters
  public function setFila($fil) {
    if ($fil>3) {
      $this->Fila=3;
    }elseif ($fil<0) {
      $this->Fila=0;
    }else {
      $this->Fila=$fil;
    }
  }
  public function setColumna($col) {
    if ($col>3) {
      $this->Columna=3;
    }elseif ($col<0) {
      $this->Columna=0;
    }else {
      $this->Columna=$col;
    }
  }
  //Random
  public function RandomPos(){
      $this->Fila=rand(0,3);
      $this->Columna=rand(0,3);
  }
}

 ?>
