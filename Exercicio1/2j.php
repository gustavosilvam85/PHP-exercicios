<?php

echo "Digite o numero de carros vendido: \n";
$numCarros = readline();

echo "Digite o valor total de vendas: \n";
$vendas = readline();

echo "Digite o salario do vendedor: \n";
$salario = readline();

echo "Digite o valor por cada carro vendido: \n";
$valorCarro = readline();

$comissaoCarroVendido = $valorCarro + $numCarros;

$comissaoVendas= $vendas * 0.05;

$salarioFinal = $salario + $comissaoCarroVendido + $comissaoVendas;

echo "O salario final é : $salarioFinal";