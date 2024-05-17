<?php

$valores = [];
$soma = 0;
$quantidade = 0;


for($i = 1 ; ; $i++){
    $valor= (int) readline("Digite o valor: \n");
    $valores [] = $valor;

    if($valor == 0){
        break;
    }
}
    $soma = array_sum($valores);
    $media = $soma/count($valores);
    $quantidade = count($valores)-1;

    echo "Somatoria dos valores = $soma \n";
    echo "Media calculada = $media \n";
    echo "A quantidade de valores é = $quantidade \n";
