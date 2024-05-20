<?php
$nome = "Gustavo";
//contador/indicar variavel;condição;decremento/incremento

for($i = 0;$i < 10;$i++){

    if ($i == 4){
        echo "$nome \n";
    }

    if($i == 8){
        break;
    }

    echo "Testando for $i \n";
}