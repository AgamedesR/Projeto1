<?php

    include_once "topo/topo.php";
    include_once "menu.php";

    // Área de conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo";
        include_once "$var.php";
    }else{
        $pg = $_GET['pg'];
        include "$pg.php";
    }

    include "rodape/rodape.php";
