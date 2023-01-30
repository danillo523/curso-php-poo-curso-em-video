<?php
require_once "Pessoa.php";

class Aluno extends Pessoa
{
    private int $matricula;
    private string $curso;


    public function getMatricula(): string
    {
        return $this->matricula;
    }


    public function setMatricula(int $matricula): void
    {
        $this->matricula = $matricula;
    }


    public function getCurso(): string
    {
        return $this->curso;
    }


    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    public function cancelarMatr()
    {
        echo "Matricula será cancelada \n";
    }

}