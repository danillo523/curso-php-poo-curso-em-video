<?php
require_once "Pessoa.php";

class Funcionario extends Pessoa
{
    private string $setor;
    private bool $trabalhando;


    public function mudarTrabalho(): void
    {
        $this->trabalhando =  ! $this->trabalhando;
    }

    public function getSetor(): string
    {
        return $this->setor;
    }


    public function setSetor(string $setor): void
    {
        $this->setor = $setor;
    }


    public function getTrabalhando(): bool
    //public function isTrabalhando(): bool
    {
        return $this->trabalhando;
    }


    public function setTrabalhando(bool $trabalhando): void
    {
        $this->trabalhando = $trabalhando;
    }


}