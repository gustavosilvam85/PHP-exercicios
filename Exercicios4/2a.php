<?php
    function multiplo($a){
        if($a % 4 == 0){
            echo "O numero é divisivel por 4";
            return true;
        }else{
            echo "O numero não é divisivel por 4";
            return false;
        }
    }

    echo "Digite um numero: \n";
    $a = readline();

    multiplo($a);

    