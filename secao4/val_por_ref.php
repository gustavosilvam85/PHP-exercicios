<?php

$x = 10;

$y =& $x;

echo $x . "\n";
echo $y . "\n";

$y = 15;

echo "Atribuição por referencia \n";
echo $x . "\n";
echo $y . "\n";

$x =20; 

echo "atribuição por referencia 2 \n";
echo $x . "\n";
echo $y . "\n";
