<?php

if(5 > 10 && 10 > 5){   // false e true 
    echo "Entrou no if 1 \n";
}

if(50 > 10 && 10>5) {// true e true
    echo "Entrou no if 2 ";
}

if(50 > 10 && 10 > 500) { //false e false
    echo "entrou no if 4 \n";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > 10 && $c == $d){ // true e true 
    echo "Entrou no if 5";
}

if($b <= $a && $c >= $d){ // true e true 
    echo "entrou no if 6";
}

if($b === $a && $c >= $d){ //false e false 
    echo "entrou no if 7"; 
}

if(($b <= $a && $c >= $d) && $a > $b){ // true e true
    echo "entrou no if 8";
}