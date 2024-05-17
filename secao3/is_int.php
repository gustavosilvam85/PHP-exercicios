<?php

is_int(5); //para checar se o 5 é inteiro 

if(is_int(5)){ //true
echo "é um inteiro \n";
}else{
    echo " não é um inteiro \n";
}

if(is_int("não é um inteiro")){ //false
    echo "não é um inteiro2 \n";
}

$a = 10;

if(is_int($a)){ //true  
    echo "é um inteiro3 \n";
}
?>