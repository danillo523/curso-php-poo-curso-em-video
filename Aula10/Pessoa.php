<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $sexo;


    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function getIdade(): int
    {
        return $this->idade;
    }


    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }


    public function getSexo(): string
    {
        return $this->sexo;
    }


    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

    public function fazerAniversario()
    {
        $this->idade ++;
    }



}