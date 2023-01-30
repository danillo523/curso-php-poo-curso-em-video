<?php

abstract class Animal
{
    protected float $peso;
    protected int $idade;
    protected $membros;


    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();


    public function getPeso(): float
    {
        return $this->peso;
    }


    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }


    public function getIdade(): int
    {
        return $this->idade;
    }


    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }


    public function getMembros()
    {
        return $this->membros;
    }


    public function setMembros($membros): void
    {
        $this->membros = $membros;
    }




}