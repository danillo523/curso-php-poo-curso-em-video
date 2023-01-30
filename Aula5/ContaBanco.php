<?php

class ContaBanco
{
 public int $numConta;
 protected string $tipo;
 private string $dono;
 private float $saldo;
 private bool $status;

    public function abrirConta(string $t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC") {
            $this->setSaldo = 50;
        } elseif ($t == "CP"){
            $this->setSaldo = 150;
        }
    }

    public function fecharConta(){

            if($this->getSaldo() > 0 ){
               echo "ainda tem dinheiro não posso fechar";
            }elseif ($this->getSaldo() < 0 ){
                echo "ta devendo não posso fechar";
            }else {
                $this->setStatus(flase);
            }


    }

    public function depositar(float $v){
       if($this->getStatus()){
           $this->setSaldo($this->getSaldo() + $v);
       } else {
           echo "Conta fechada, não da para depositar";
       }
    }

    public function sacar(float $v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else{
                echo "saldo insuficiente";
            }

        } else {
            echo "Conta fechada, não da para sacar";
        }
    }

    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP"){
            $v = 22;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);

        }else {
            echo "problemas na conta, não posso cobrar";
        }


    }


    public function __contruct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }


    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta( int $numConta): void
    {
        $this->numConta = $numConta;
    }

    public function setTipo( string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }


    public function setDono( string $dono): void
    {
        $this->dono = $dono;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}
