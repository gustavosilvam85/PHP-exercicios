<?php

$a = "teste";
$b = 12.8;

if(is_float($a)){
    echo "é float1\n";
}

if(is_float($b)){
    echo "é float2 \n";
}

if(is_float(6565.63)){
    echo "é float3 \n";
}

if(is_float("teste")){
    echo "é float4\n";
}