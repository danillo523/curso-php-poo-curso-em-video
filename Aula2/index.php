<?php
require_once 'Caneta.php';

$c1 = new Caneta();

$c1->cor = "BIC";
$c1->ponta =0.5;

$c2 = new Caneta();

$c2->cor = "Roxa";
$c2->carga = 25;
$c2->tampar();


print "eu tenho uma caneta ".$c1->modelo." de ponta ".$c1->ponta;