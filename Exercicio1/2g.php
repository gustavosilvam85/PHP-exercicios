<?php

echo "vamos calcular a area de um losangulo \n";
echo "Digite a diagonal maior: \n";
$diagonalMaior = readline();

echo "Digite a diagonal menor: \n";
$diagonalMenor= readline();

$area = ($diagonalMaior * $diagonalMenor)/2;

echo "A area do losangulo é $area \n";