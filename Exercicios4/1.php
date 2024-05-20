<?php
function soma($a,$b){
    $c = $a + $b;
    echo "O resultado da soma é : $c \n";
}

function subtracao($a,$b){
    $c = $a - $b;
    echo "O resultado da subtração é : $c \n";
}
function multiplicacao($a,$b){
    $c = $a * $b;
    echo "O resultado da multiplicação é : $c \n";
}
function divisão($a,$b){
    
    if($b == 0){
        echo "Erro digite outro divisor";
    }

    $c = $a / $b;
    echo "O resultado da divisão é : $c \n";
}

echo "Digite um valor A: \n";
$a = readline();

echo "Digite um valor B: \n";
$b = readline();

echo "Escolha o tipo da operação: \n";
echo "1 - Soma \n";
echo "2 - Subtração \n";
echo "3 - Multiplicação \n";
echo "4 - Divisão \n";

$operacao = readline();
if($operacao == 1){
    soma($a,$b);
}else if($operacao == 2){
    subtracao($a,$b);
}elseif($operacao == 3){
    multiplicacao($a,$b);
}elseif($operacao == 4){
    divisão($a,$b);
}

