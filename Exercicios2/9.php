<?php

echo "Digite um numero: ";
$num = readline();

if($num <=30){
    echo "O numero nao esta entre 30 e 90";
}else if($num >=30 == $num <=90){
    echo "O numero esta entre 30 e 90";
}else if($num >=120){
    echo "O numero é maior ou igual a 120";
}