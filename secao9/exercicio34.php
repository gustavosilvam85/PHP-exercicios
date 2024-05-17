<?php

function parOuImpar($valor){
    if($valor % 2 == 0){
        echo "é par\n";
    }else{
        echo "é impar\n";
    }
};

parOuImpar(3);
parOuImpar(1);