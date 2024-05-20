<?php

$i = 1;

while($i <= 10){
    echo "loop externo $i \n";
    
    //segundo contador 
    $j = 1;

    while($j <= 5){
        echo "loop interno $j \n";

        $j++;

    }
     //fim segundo contador
    
    $i++;
}