<?php
require_once "Animal.php";

class Mamifero extends Animal
{
    private string $corPelo;

    public function alimentar()
    {
        echo "Mamando \n";
    }

    public function emitirSom()
    {
        echo "Som de Mamífero \n";
    }

    public function locomover()
    {
        echo "Correndo \n";
    }

    public function getCorPelo(): string
    {
        return $this->corPelo;
    }


    public function setCorPelo(string $corPelo): void
    {
        $this->corPelo = $corPelo;
    }

}