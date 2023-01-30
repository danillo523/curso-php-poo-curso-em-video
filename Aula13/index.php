<?php
    require_once 'Animal.php';
    require_once 'Cachorro.php';
    require_once 'Mamifero.php';



    $m =  new Mamifero();
    $k =  new Cachorro();
    $l =  new Lobo();


    $m->emitirSom();
    $l->emitirSom();
    $k->reagirFrase("Olá");
    $k->reagirFrase("Vai apanhar");
    $k->reagirHora(11,45);
    $k->reagirHora(21,00);
    $k->reagirDono(true);
    $k->reagirDono(false);
    $k->reagirIdade(2,12.5);
    $k->reagirIdade(17,5.5);


    //print_r($m);
