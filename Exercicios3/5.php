<?php

$maior = 0;
$menor = 9999999;

for($i = 1 ; ; $i++){
    $valor = (int) readline("Digite o valor: \n");

    if($valor > $maior){
        $maior = $valor;
    }
    if($valor < $menor && $valor != 0){
        $menor = $valor;
    }

    if($valor == 0){
        break;
    }
}

echo "O maior valor é $maior \n";
echo "O menor valor é $menor \n";