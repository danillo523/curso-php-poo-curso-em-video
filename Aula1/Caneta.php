<?php

class Caneta
{
  var string $modelo;
  var string $cor;
  var float $ponta;
  var int $carga;
  var bool $tampada;

  function rabiscar(){

      if($this->tampada == true){
          echo "não posso rabiscar";
      }else{
          echo "estou rabiscando";
      }

  }

  function tampar(){
     $this->tampada = true;
    }

  function destampar(){
      $this->tampada =false;
    }
}