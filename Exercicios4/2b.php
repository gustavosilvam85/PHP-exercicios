<?php
    function parImpar($a){
        if($a % 2 == 0){
            echo "O numero é par";
            return true;
        }else{
            echo "O numero é impar";
            return false;
        }
    }

    echo "Digite um numero: \n";
    $a = readline();

    parImpar($a);

    