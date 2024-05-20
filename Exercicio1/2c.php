<?php 

echo "Digite o valor do produto \n";

$valorProduto = readline();

$valorPorcentagem = $valorProduto / 100;

$valorReajuste = $valorProduto + $valorPorcentagem;

echo "O valor reajustado de $valorProduto foi para $valorReajuste \n";