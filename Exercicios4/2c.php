<?php

function contador($a,$b){
    for($i=($a+1);$i < $b; $i++){
        echo "$i \n";
    }
}

echo "Digite o valor A: \n";
$a  = readline();

echo "Digite o valor B: \n";
$b = readline();

contador($a,$b);

