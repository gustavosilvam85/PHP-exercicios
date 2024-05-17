<?php 

// Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever
//uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o 
//aluno é aprovado). Escrever também a média calculada.

echo "Escreva a nota da avaliação 1 do aluno: \n";
$ava1 = readline();

echo "Escreva a nota da avaliação 2 do aluno: \n";
$ava2 = readline();

$NotaFinal = ($ava1 + $ava2) / 2;

if($NotaFinal >=6){
    echo "O aluno foi aprovado\n";
}else {
    echo "O aluno foi reprovado\n";
}