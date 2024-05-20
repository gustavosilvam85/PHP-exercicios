<?php

echo "Digite o valor do salario minimo: \n";

$salarioMinimo = readline();

echo "Digite o valor gasto em Quilowatts: \n";

$valorKW = readline(); // quantidade gasto em KW

$kw100 = $salarioMinimo / 7;

$kw1= $kw100 /100; //em reais

$valorFinal = $valorKW * $kw1;

$valorDesconto = $valorFinal / 100;

$valorDescontoFinal = $valorFinal - $valorDesconto;

echo "O valor final a ser pago é $valorFinal \n";
echo "O valor em reais de cada quilowatt é $kw1 \n";
echo "O valor a ser pago com o valor de 10% é $valorDescontoFinal \n";