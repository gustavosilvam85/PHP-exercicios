<?php

//Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.

echo "Digite o valor 1: \n";
$valor1 = readline();

echo "Digite o valor 2: \n";
$valor2 = readline();

if($valor1 > $valor2){
    echo "O maior valor é o primeiro valor que é $valor1 \n";
}else {
    echo "O maior valor é o segundo valor que é $valor2 \n";
}

