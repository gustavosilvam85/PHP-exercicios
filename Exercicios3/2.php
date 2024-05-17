<?php

$valores = [];
$soma = 0;


for($i = 1 ; $i <= 10; $i++){
    $valor= (int) readline("Digite o valor: \n");
    $valores [] = $valor;
}
    $soma = array_sum($valores);
    $media = $soma/count($valores);

    echo "Somatoria dos valores = $soma \n";
    echo "Media calculada = $media \n";