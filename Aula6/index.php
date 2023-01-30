<?php

        require_once "ControleRemoto.php";

        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->maisVolume();
        $c1->menosVolume();
        $c1->abrirMenu();
