<?php
require_once "Animal.php";

class Mamifero extends Animal
{
    private string $corPelo;

    public function emitirSom()
    {
        echo "Som de Mamífero \n";
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