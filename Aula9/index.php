<?php
  require_once "Pessoa.php";
  require_once "Livro.php";


  $p[0] = new Pessoa("Pedro",20, "M");
  $p[1] = new Pessoa("Maria", 31, "F");

  $l[0] = new Livro("PHP Básico","José da Silva", 300,$p[0]);
  $l[1] = new Livro("POO em PHP","Maria de Souza", 500,$p[0]);
  $l[2] = new Livro("PHP Avançado","Ana Paula", 800,$p[1]);


 $l[0]->abrir();
 $l[0]->folhear(500);
 $l[0]->detalhes();

 $l[1]->detalhes();
 $l[2]->detalhes();