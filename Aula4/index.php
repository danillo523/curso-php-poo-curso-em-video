<?php
require_once 'Caneta.php';

//print_r($c1);

$c2 = new Caneta("quilometrica","vermelha", 0.6);
print_r($c2);

print "eu tenho uma caneta ".$c2->getModelo()." de ponta ".$c2->getPonta();
