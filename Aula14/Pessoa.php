<?php

abstract class Pessoa
{
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected string $experiencia;


    public function __construct(string $nome, int $idade, string $sexo )
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }


    protected function ganharEXP(int $n)
    {
        $this->experiencia += $n;
    }

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


    public function getExperiencia(): string
    {
        return $this->experiencia;
    }


    public function setExperiencia(string $experiencia): void
    {
        $this->experiencia = $experiencia;
    }

}