<?php

    function imprimeVariaveis(){
        $local = 1;
        global $global;
        static $static = 3;
        
        echo "Static: $static <br>";
        $static++;
        
        echo "Global: $global <br>";
        echo "Local: $local <br>";
        echo "Superglobal: $GLOBALS[superGlobal] <br>";
    }
    
    $global = 2;
    $superGlobal = 10;
    
    imprimeVariaveis();
    echo "<br>";
    imprimeVariaveis();
    echo "<br>";
    imprimeVariaveis();
?>