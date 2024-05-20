<?php

echo "Digite o ano de nascimento: ";
$anoNascimento = readline();

$idade = 2024 - $anoNascimento;
echo "a idade é $idade \n";

if($idade >= 16 && $idade >=18){
    echo "Pode tirar a carteira de habilitação\n";
    echo "Já pode votar \n";
}else if($idade >= 16 && $idade <18){
    echo "Já pode votar\n";
}

