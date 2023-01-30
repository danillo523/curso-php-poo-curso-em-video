<?php
require_once "Lobo.php";

class Cachorro extends Lobo
{
    public function emitirSom()
    {
        echo "Au! Au! Au! \n";
    }

    public function reagirFrase(string $frase){
        if($frase == "toma comida" || $frase == "Olá"){
            echo "Abanar e latir \n";

        }else{
            echo "Rosnar \n";
        }

    }

    public function reagirDono(bool $dono){
        if($dono == true){
            echo "Abanar \n";

        }else{
            echo "Rosnar e latir \n";
        }

    }

    public function reagirHora(int $hora, int $min){
            if($hora < 12){

                echo "Abanar \n";

            }elseif ($hora >= 18){

                echo "Ignorar \n";
            }else{
                echo "Abanar e latir \n";
            }
    }

    public function reagirIdade(int $idade, float $peso){
        if($idade < 5){

            if($peso<10){
                echo "Abanar";
            }else{
                echo "Latir";
            }

        }else{

            if($peso<10){
                echo "Rosnar";
            }else{
                echo "Ignorar";
            }
        }
    }


}