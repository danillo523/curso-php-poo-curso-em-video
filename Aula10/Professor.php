<?php
require_once "Pessoa.php";

class Professor extends Pessoa
{
    private string $especialidade;
    private float $salario;


    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }


    public function setEspecialidade(string $especialidade): void
    {
        $this->especialidade = $especialidade;
    }


    public function getSalario(): float
    {
        return $this->salario;
    }


    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function receberAum(float $aumento): void
    {
        $this->salario += $aumento;
    }

}