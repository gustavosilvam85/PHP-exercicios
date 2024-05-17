<?php

$a = true;

if(is_bool($a)){ //true
    echo "é um booleano 1 \n";
}

if(is_bool(0)){ //false
    echo " é um booleano 2 \n";
}

if(is_bool(false)){ //true
    echo " é um booleano 3 \n";
}

if(0 == false){ // true
    echo "0 é considerado falso \n";
}