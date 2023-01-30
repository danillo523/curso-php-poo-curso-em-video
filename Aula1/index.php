<?php
require_once 'Caneta.php';

$c1 = new Caneta();
$c1->cor = "azul";
$c1->ponta = 0.5;
$c1->tampada = true;
$c1->tampar();
print_r($c1);

$c2 = new Caneta();
$c2->cor = "verde";
$c2->carga = 50;
$c2->tampar();
print_r($c2);