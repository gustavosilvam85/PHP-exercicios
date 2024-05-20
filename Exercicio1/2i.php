<?php

echo "Digite o horario Ex:09:10\n";
$horarioNow = readline(); // define horario

$parteHora = intval( strstr($horarioNow,":",true)) ;
$parteMinuto = intval(ltrim(strchr($horarioNow,":"), ":"));

echo $parteHora. "\n";
echo $parteMinuto ."\n";

$horarioMinutos =($parteHora * 60)+($parteMinuto);

echo "Minutos desde o inicio do dia: $horarioMinutos\n";




// echo "Digite o horario \n";
// $horarioNow = readline(); 
// echo "Digite os minutos \n";
// $horarioNow = readline(); 
// $horarioMinutos =($parteHora * 60)+($parteMinuto);

// echo "Minutos desde o inicio do dia: $horarioMinutos\n";

