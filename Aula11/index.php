<?php
require_once "Pessoa.php";
require_once "Visitante.php";
require_once "Aluno.php";
require_once "Bolsista.php";
    //$v1->setNome("Juvenal");
    //$v1->setIdade(21);
    //$v1->setSexo("M");
    //print_r($v1);

    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(123);
    $a1->setIdade(14);
    $a1->setSexo("M");
    $a1->setCurso("Informatica");
    $a1->pagarMensalidade();
    print_r($a1);

    $b1 = new Bolsista();
    $b1->setNome("Ana");
    $b1->setMatricula(122);
    $b1->setIdade(17);
    $b1->setSexo("F");
    $b1->setCurso("Edificações");
    $b1->setBolsa(12);
    $b1->pagarMensalidade();
    print_r($b1);


