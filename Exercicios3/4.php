<?php

$soma = 0;
$contagem = 0;

for($i=50;$i <= 70;$i++){

    if($i % 2 == 0){
        
        $soma += $i;
    }

    $contagem++;
}

if($contagem > 0){
    $media = $soma/$contagem;
}else{
    $media = 0;
}

echo "Soma dos pares = $soma \n";
echo "Media dos pares = $media \n";