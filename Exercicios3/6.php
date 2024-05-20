<?php
$nota1 = 0;

do { // faça

    echo "Digite a nota 1: \n";
$nota1 = readline();

if($nota1 < 0 || $nota1 > 10){
    echo "Nota Invalida. Escolha uma nota de 0 a 10 \n";
    
    echo "\nNovo calculo (S/N) \n";
    $resposta = readline();

    continue;
}

echo "Digite a nota 2: \n";
$nota2 = readline();

if($nota2 <0 || $nota2 > 10){
    echo "Nota Invalida. Escolha uma nota de 0 a 10 \n";

    echo "\nNovo calculo (S/N) \n";
    $resposta = readline();

    continue;
}

$media = ($nota1 + $nota2) /2 ;
echo "A media do aluno foi = $media \n";

echo "\nNovo calculo (S/N) \n";
$resposta = readline();

}while($resposta == "S" || $resposta == "s"); //enquanto 
    
?> 