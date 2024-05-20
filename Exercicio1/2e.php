<?php

echo "Digite a base de um triangulo: \n";
$base = readline();

echo "Digite a altura de um triangulo: \n";
$altura = readline();

//area

$area = $base * $altura;

//diagonal

$diagonal_retangulo = $base**2 + $altura**2;
$diagonal = sqrt($diagonal_retangulo);

// perimetro 

$perimetro = ($base*2) + ($altura*2);

echo "A area é $area \n";
echo "A diagonal é $diagonal \n";
echo "O Perimetro  é $perimetro\n";