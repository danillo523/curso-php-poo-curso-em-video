<?php
require_once "Lutador.php";
class Luta
{
    //private Lutador $desafiado;
    //private Lutador $desafiante;
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    public function marcarLuta( $l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
          $this->aprovada = true;
          $this->desafiado = $l1;
          $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada){
          $this->desafiado->apresentar();
          $this->desafiante->apresentar();
          $vencedor = rand(0,2);
          switch($vencedor){
              case 0:
                  echo "Empatou! \n\n";
                  $this->desafiado->empatarLuta();
                  $this->desafiante->empatarLuta();
                  break;

              case 1:
                  echo $this->desafiado->getNome()." Venceu! \n\n";
                  $this->desafiado->ganharLuta();
                  $this->desafiante->perderLuta();
                  break;

              case 2:
                  echo $this->desafiante->getNome()." Venceu! \n\n";
                  $this->desafiante->ganharLuta();
                  $this->desafiado->perderLuta();
                  break;

          }
        }else{

            echo "A luta não pode acontecer! \n\n";
        }
    }

    public function getDesafiado(): Lutador
    {
        return $this->desafiado;
    }


    public function setDesafiado(Lutador $desafiado): void
    {
        $this->desafiado = $desafiado;
    }


    public function getDesafiante(): Lutador
    {
        return $this->desafiante;
    }


    public function setDesafiante(Lutador $desafiante): void
    {
        $this->desafiante = $desafiante;
    }


    public function getRounds()
    {
        return $this->rounds;
    }


    public function setRounds($rounds): void
    {
        $this->rounds = $rounds;
    }


    public function getAprovada()
    {
        return $this->aprovada;
    }


    public function setAprovada($aprovada): void
    {
        $this->aprovada = $aprovada;
    }


}