<?php

date_default_timezone_set('America/Sao_Paulo');
$usuarioAdmin = "Admin";
$senhaAdmin = "12345";
$usuarioCadastro= NULL;
$senhaCadastro = NULL;
$usuario = "";
$quantidade = 0;
$itemVenda = "";
$valor = "";
function cadastroUsuario() {
    system('clear');
    global $usuarioCadastro, $senhaCadastro;
    Echo "=====CADASTRO===== \n";
    echo "Digite o nome de usuario \n";
    $usuarioCadastro = readline();
    echo "Digite a Senha do usuario \n";
    $senhaCadastro = readline();
    return menu();
}

function logar(){
    global $usuarioAdmin, $senhaAdmin, $usuarioCadastro, $senhaCadastro,$usuario;
    system('clear');
    echo "=====LOGIN===== \n";
    echo "Digite o Nome de usuario \n";
    $usuario = readline();
    echo "Digite a Senha do usuario \n";
    $senha= readline();

    if($usuario == $usuarioAdmin || $usuario==$usuarioCadastro && $senha == $senhaCadastro || $senha == $senhaAdmin){
        echo "Logado com sucesso \n";
        return MenuPrincipal();
    }else{
        echo "Login Invalido \n";
    }
}

function menu(){
    system('clear');
    echo "Digite a opção desejada  \n";
    echo "[1]- Cadastrar\n";
    echo "[2]- Logar \n";
    $opcao = readline(); 
    
    if($opcao == 1){
        cadastroUsuario();
    }else if($opcao == 2){
        logar();
    }else{
        echo "Opção invalida\n";
        return menu();
    }

}

function MenuPrincipal(){
    global $usuario;
    system('clear');
    Echo "=====BEM VINDO AO MENU PRINCIPAL=====\n";
    echo "Usuario logado : $usuario \n";
    Echo "[1]- Vendas\n";
    Echo "[2]- Verificar Log\n";
    Echo "[3]- Deslogar\n";
    Echo "Escolha uma opçao: \n";
    $opcaoPrincipal = readline();
    if($opcaoPrincipal == 1){
        return Vendas();
    }else if($opcaoPrincipal == 2){
        return verificarLog();
    }else if($opcaoPrincipal == 3){

    }else{
        echo "Opcão Invalida \n";
    }
    }

function Vendas(){
    global $quantidade,$itemVenda,$valor;

    system('clear');
    echo "=====REGISTRO DE VENDAS=====\n";
    echo "Digite a quantidade de vendas: \n";
    $quantidade = (int)readline();
    echo "Digite O item vendido : \n";
    $itemVenda = readline();
    echo "Digite o Valor do item: (Ex:19.90)\n";
    $valor = readline();

    if($quantidade != 0 && !empty($itemVenda)){  //Nega itemVenda
        echo "Venda Registrada com sucesso\n";
    }else {
        echo "Venda Não Registrada\n";
        return Vendas();
    }
    
    echo "A venda de : $quantidade $itemVenda de $valor Reais foi registrada \n";
    // return MenuPrincipal();
}

function logLogin(){
    global $usuario;

    echo "O usuario $usuario entrou as " . date('d/m/Y H:i:s') . "\n";
}
function logVenda(){
    global $usuario,$quantidade,$itemVenda,$valor;

    echo "O usuario $usuario registrou a venda de $quantidade de $itemVenda com valor de $valor as ". date('d/m/Y H:i:s'). "\n";
}

function logLogout(){
    global $usuario;

    echo "O usuario $usuario saiu as " . date('d/m/Y H:i:s') . "\n";
}
function verificarLog(){
    logLogin();
    logVenda();
    logLogout();
}

menu();

