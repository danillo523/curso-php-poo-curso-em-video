<?php

class Peixe extends Animal
{
    private string $corEscama;

    public function getCorEscama(): string
    {
        return $this->corEscama;
    }


    public function setCorEscama(string $corEscama): void
    {
        $this->corEscama = $corEscama;
    }

    public function soltarBolha(){
        echo "Soltou uma bolha \n";
    }

    public function alimentar()
    {
        echo "Comendo substancias \n";
    }

    public function emitirSom()
    {
        echo "Peixe não faz som \n";
    }

    public function locomover()
    {
        echo "Nadando \n";
    }


}