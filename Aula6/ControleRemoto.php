<?php
require_once "Controlador.php";
class ControleRemoto implements Controlador
{

    private int $volume;
    private bool $ligado;
    private bool $tocando;


    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getLigado()
    {
        return $this->ligado;
    }


    public function setLigado(bool $ligado): void
    {
        $this->ligado = $ligado;
    }


    public function getTocando()
    {
        return $this->tocando;
    }


    public function setTocando(bool $tocando): void
    {
        $this->tocando = $tocando;
    }


    public function ligar()
    {
      $this->setLigado(true);
    }

    public function desligado()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "Esta ligado?: ". ($this->getLigado() ? " SIM " : " NÃO ");
        echo "Esta Tocando?: ". ($this->getTocando() ? " SIM " : "NÃO ");
        echo "Volume: ".$this->getVolume();
        for ($i=0; $i <= $this->getVolume(); $i+=10){
            echo "!";
        }
    }

    public function fecharMenu()
    {
        echo "fechando menu";
    }

    public function maisVolume()
    {
        if($this->getLigado()){

            $this->setVolume($this->getVolume() + 5);

        }
    }

    public function menosVolume()
    {
        if($this->getLigado()){

            $this->setVolume($this->getVolume() - 5);

        }
    }

    public function ligarMudo()
    {
        if($this->getLigado() && $this->getVolume() >50){

            $this->setVolume(0);

        }
    }

    public function desligarMudo()
    {
        if($this->getLigado() && $this->getVolume() >0){

            $this->setVolume(50);

        }
    }

    public function play()
    {
        if( $this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if( $this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}