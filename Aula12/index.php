<?php
    require_once 'Animal.php';
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Ave.php';
    require_once 'Peixe.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'GoldFish.php';
    require_once 'Ave.php';

    $m =  new Mamifero();
    $a =  new Ave();
    $r =  new Reptil();
    $c =  new Canguru();
    $k =  new Cachorro();
    $t =  new Tartaruga();
    //$cb =  new Cobra();

    $m->emitirSom();
    $c->emitirSom();
    $k->emitirSom();
    $t->emitirSom();

    print_r($m);
