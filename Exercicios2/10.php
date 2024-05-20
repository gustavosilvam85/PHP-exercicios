<?php

echo "Digite o valor do produto: ";
$valorProduto = readline();

$valorFinal=NULL;

if($valorProduto <= 20.00){
    $valorPorcentagem = $valorProduto/100;
    $valorFinal = ($valorPorcentagem *45 ) + $valorProduto;
    echo "O Preço de venda com 45% de lucro é: $valorFinal";
}else{
    $valorPorcentagem = $valorProduto/100;
    $valorFinal = ($valorPorcentagem*30)+ $valorProduto;
    echo "O preço de venda com 30% de lucro é: $valorFinal";
}