<?php

//Identifique, entre três jogadores, os ganhadores do “dois-ou-um”. O “dois-ou-um” é disputado na primeira rodada.
// O vencedor é quem, na segunda rodada, vence o “par-ou-ímpar”.

//Primeira rodada 

echo "Jogador 1- Digite o 2 ou 1 \n";
$jogador1 = readline();

echo "Jogador 2- Digite o 2 ou 1 \n";
$jogador2 = readline();

echo "Jogador 3- Digite o 2 ou 1 \n";
$jogador3= readline();

//Conta quantas vezes cada valor aparece

$contadores = array_count_values([$jogador1,$jogador2,$jogador3]);

if(count($contadores) == 1){
    echo "Empate";
    return;
}

$jogadores = ["Jogador 1","Jogador 2","Jogador 3"];

foreach($contadores as $numero => $contador){
    if($contador == 1){ // identica o perdedor


        if($jogador1 == $numero){
            echo "Jogador 1 é o perdedor da primeira rodada\n";
            array_splice($jogadores,0,1);
            
        }elseif($jogador2 == $numero){
            echo "Jogador 2 é o perdedor da primeira rodada\n";
            array_splice($jogadores,1,1);

        }else{
            echo "Jogador 3 é o perdedor da primeira rodada\n";
            array_splice($jogadores,2,1);
        }
    }
}

//Segunda Rodada 
echo "O $jogadores[0] usara PAR \n";
echo "O $jogadores[1] usara IMPAR \n";
echo "$jogadores[0] - Digite um numero: \n";
$jogadorPAR = readline();

echo "$jogadores[1] - Digite um numero: \n";
$jogadorIMPAR = readline();

$resultado = ($jogadorPAR + $jogadorIMPAR )% 2;
if($resultado == 0){
    echo "$jogadores[0] é o vencedor";
}else {
    echo "$jogadores[1] é o vencedor";
}
