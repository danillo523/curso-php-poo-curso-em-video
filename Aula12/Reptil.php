<?php
require_once "Animal.php";

class Reptil extends Animal
{

    private string $corEscama;

    public function alimentar()
    {
        echo "Comendo Vegetais \n";
    }

    public function emitirSom()
    {
        echo "som de Réptil \n";
    }

    public function locomover()
    {
        echo "Rastejando \n";
    }

    public function getCorEscama(): string
    {
        return $this->corEscama;
    }


    public function setCorEscama(string $corEscama): void
    {
        $this->corEscama = $corEscama;
    }
}