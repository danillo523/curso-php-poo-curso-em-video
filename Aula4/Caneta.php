<?php



class Caneta
{
    private string $modelo;
    private float $ponta;
    private string $cor;


 //   public function __construct()
 //   {
 //       $this->cor = "Azul";
 //       $this->tampar();
 //  }

    public function __construct(string $m, string $c, float $p)
    {

        $this->modelo = $m;
        $this->ponta = $p;
        $this->cor = $c;
        $this->tampar();
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo(string $m)
    {
        $this->modelo = $m;
    }


    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta(float $p)
    {
        $this->ponta = $p;
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada =false;
    }

}