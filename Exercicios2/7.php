<?php

echo "Digite a idade do nadador \n";
$idade = readline();

if($idade>=5 == $idade <= 7){
    echo "A categoria é infantil A \n";
}elseif($idade >=8 == $idade <=10){
    echo "A categoria é Infantil B";
}elseif($idade >=11 == $idade <=13){
    echo "A categoria é Juvenil A";
}elseif($idade >=14 == $idade <=17){
    echo "A categoria é Juvenil B";
}else{
    echo "A categoria é Senior";
}