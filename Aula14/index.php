<?php

    require_once "Video.php";
    require_once "Visualizacao.php";
    require_once "Gafanhoto.php";


    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 12 de PHP");
    $v[2] = new Video("Aula 15 de HTML5");


    $g[0] = new Gafanhoto("Danillo",28,"M","danillo523");
    $g[1] = new Gafanhoto("Monica",36,"F","monikinha");

    $vis[0] = new Visualizacao($g[0],$v[2]);
    $vis[1] = new Visualizacao($g[0],$v[1]);


    $vis[0]->avaliar();
    $vis[1]->avaliarPorc(85);
    $vis[1]->avaliarNota(10);


    //print_r($v);
    //print_r($g);
    print_r($vis);
