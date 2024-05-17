<?php

// Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo)

echo "Digite o valor:\n";
$valor = readline();

if($valor >= 0){
    echo "O valor é positivo \n";
}else{
    echo "O valor é negativo \n";
}