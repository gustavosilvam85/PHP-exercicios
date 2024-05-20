<?php

function pesoMasculino ($altura){
   $peso = 72.7 * $altura - 58 ; 
   echo "O peso ideal para o genero Masculino com altura de $altura é : $peso \n";
}

function pesoFeminino($altura){
   $peso = 62.1 * $altura - 44.7;
   echo "O peso ideal para o genero Feminino com altura de $altura é : $peso \n";
}

echo "Digite a sua altura: \n";
$altura = readline();

echo "Digite M para genero Masculino ou F para genero Feminino \n";
$genero = readline();

if($genero == "M" || $genero == "m"){
pesoMasculino($altura);

}elseif($genero == "F" || $genero == "f"){
pesoFeminino($altura);

}else{
   echo "Digite um genero valido \n";
}

