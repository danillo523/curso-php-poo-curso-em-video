<?php

class Pessoa
{
   private $nome;
   private $idade;
   private $sexo;

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome): void
    {
        $this->nome = $nome;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    public function fazerAniver(){
        $this->idade = $this->idade + 1;
    }


}