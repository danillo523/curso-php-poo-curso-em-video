<?php

class Lutador
{
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int$empates;

    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates)
    {
       $this->nome = $nome;
       $this->nacionalidade = $nacionalidade;
       $this->idade = $idade;
       $this->altura = $altura;
       $this->setPeso($peso);
       $this->vitorias = $vitorias;
       $this->derrotas = $derrotas;
       $this->empates = $empates;

    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }


    public function setNacionalidade(string $nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }


    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }


    public function getPeso()
    {
        return $this->peso;
    }


    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
        $this->setCategoria();
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    private function setCategoria(): void
    {

        if( $this->peso < 52.2){
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }

    }


    public function getVitorias()
    {
        return $this->vitorias;
    }


    public function setVitorias(int $vitorias): void
    {
        $this->vitorias = $vitorias;
    }


    public function getDerrotas()
    {
        return $this->derrotas;
    }


    public function setDerrotas(int $derrotas): void
    {
        $this->derrotas = $derrotas;
    }


    public function getEmpates()
    {
        return $this->empates;
    }


    public function setEmpates(int $empates): void
    {
        $this->empates = $empates;
    }


    function apresentar(){
      echo "\n\n";
      echo "Chegou a Hora do lutador: ". $this->getNome()."\n";
      echo "Veio diretamente de : ". $this->getNacionalidade()."\n";
      echo "Tem ". $this->getIdade()." anos de idade e pesa ".$this->getPeso()."\n";
      echo "Ele tem ". $this->getVitorias()." vitorias \n";
      echo  $this->getDerrotas()." derrotas e ". $this->getEmpates()." empates \n";
      echo "\n\n";
    }

    function status(){
      echo "\n\n";
      echo $this->getNome()." é um peso ".$this->getCategoria()."\n";
      echo "E já ganhou ".$this->getVitorias()." vezes, \n";
      echo "e perdeu ".$this->getDerrotas()." vezes, e empatou ".$this->getEmpates() ."\n";
      echo "\n\n";
    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }


}