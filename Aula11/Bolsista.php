<?php
require_once "Aluno.php";

class Bolsista extends Aluno
{
    private int $bolsa;

    public function renovarBolsa(){
        echo "Bolsa renovada \n";
    }

    public function pagarMensalidade()
    {
        echo $this->nome." é bolsista então paga com desconto de ". $this->getBolsa()."% \n";
    }


    public function getBolsa(): int
    {
        return $this->bolsa;
    }


    public function setBolsa(int $bolsa): void
    {
        $this->bolsa = $bolsa;
    }






}