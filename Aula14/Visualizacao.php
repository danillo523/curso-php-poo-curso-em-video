<?php

require_once "Video.php";
require_once "Gafanhoto.php";

class Visualizacao
{
    private Gafanhoto $espectador;
    private Video $filme;


    public function __construct(Gafanhoto $espectador, Video $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setToAssistindo($this->espectador->getToAssistindo() + 1);
    }


    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota(int $nota){
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc(int $porc){
        $nota = 0;
            if($porc <= 20){
              $nota = 3;
            }elseif($porc <= 50){
              $nota = 5;
            }elseif ($porc <= 90){
             $nota = 8;
            } else {
             $nota = 10;
            }

            $this->filme->setAvaliacao($nota);
    }


    public function getEspectador(): Gafanhoto
    {
        return $this->espectador;
    }


    public function setEspectador(Gafanhoto $espectador): void
    {
        $this->espectador = $espectador;
    }


    public function getFilme(): Video
    {
        return $this->filme;
    }


    public function setFilme(Video $filme): void
    {
        $this->filme = $filme;
    }





}