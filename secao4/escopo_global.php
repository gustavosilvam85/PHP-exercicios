<?php   

    $teste = "asd";

    echo "$teste global 1 \n";

    if(true){
        $teste = "dsa";

        echo "$teste if\n";
    }

    echo "$teste global 2 \n";

    function funcao (){
        $teste = "xsxs";
        echo "$teste local \n";
    }

    funcao();

    function testandoGlobal(){
        global $teste;
        echo "$teste global funcao \n";
    }


    testandoGlobal();