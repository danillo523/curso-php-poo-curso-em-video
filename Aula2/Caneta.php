<?php

class Caneta
{
    public string $modelo;
    public string $cor;
    private float $ponta;
    protected int $carga;
    protected bool $tampada;

    public function rabiscar(){

        if($this->tampada == true){
            echo "não posso rabiscar";
        }else{
            echo "estou rabiscando";
        }

    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada =false;
    }
}
