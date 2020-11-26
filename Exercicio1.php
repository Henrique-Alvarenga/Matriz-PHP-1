<?php

    $matriz = array (0 => array (1,2,3), 1 => array (4,5,6), 2 => array (7,8,9));

    foreach ($matriz as $posicaoVetor => $valor){
        foreach ($valor as $posicaoNumero => $numero){
            echo "Posicao [$posicaoVetor][$posicaoNumero] = ".($numero + 2)."<br>";
        }
    }
?>