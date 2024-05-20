<?php

echo "Digite o Valor do produto\n";
$valorProduto = readline();

echo "Escolha a opção de pagamento\n";
$pagamento = readline();

$avista = 1;
$cartao = 2;
$cartao2x = 3;
$cartao3x = 4;

$valorFinal = NULL;

if($pagamento == $avista){
    $valorPorcentagem = $valorProduto / 100;
    $valorFinal = $valorProduto - ($valorPorcentagem*10);
    echo "O valor final é " . $valorFinal;

}else if($pagamento == $cartao){
    $valorPorcentagem = $valorProduto/ 100;
    $valorFinal = $valorProduto - ($valorPorcentagem*5);
    echo "O valor final é $valorFinal";

}else if($pagamento == $cartao2x){
    $valorFinal = $valorProduto / 2;
    echo "O valor final é 2 x $valorFinal ";

}else if($pagamento == $cartao3x){
    $valorPorcentagem = $valorProduto/100;
    $valorFinal = ($valorPorcentagem*10)/3;
    echo "O valor final é 3 x $valorFinal";
}else{
    echo"Erro ao escolher pagamento";
}