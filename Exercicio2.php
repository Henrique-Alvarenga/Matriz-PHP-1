<?php

    $matriz = array ("Henrique" => array ("Idade" => 18, "Cidade" => "Cataguases"), 
                     "Ana" => array("Idade" => 56, "Cidade" => "Sao Paulo"), 
                     "Isabela" => array ("Idade" => 17, "Cidade" => "Leopoldina"), 
                     "Lucas" => array ("Idade" => 28, "Cidade" => "Rio de Janeiro"));

    foreach($matriz as $nome => $informacao){
        echo "Nome: $nome"."<br>";
        foreach($informacao as $posicao => $dados){
            echo "$posicao: $dados"."<br>";
        }
        echo "<br>";
    }
?>