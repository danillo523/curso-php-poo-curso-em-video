<?php

class Ave extends Animal
{

    private string $corPena;

    public function alimentar()
    {
        echo "Comendo Frutas \n";
    }


    public function getCorPena(): string
    {
        return $this->corPena;
    }


    public function setCorPena(string $corPena): void
    {
        $this->corPena = $corPena;
    }

    public function fazerSom()
    {
        echo "Construir um ninho";
    }

    public function emitirSom()
    {
        echo "som de ave \n";
    }

    public function locomover()
    {
        echo "Voando \n";
    }

}