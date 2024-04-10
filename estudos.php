<?php

    //Tipos de dados

    //String
    $nome = "Eric";

    $idade = "38";

    //Integer
    $valor = 250;

    $idade2 = 15;

    //float

    $valor1F = 18.5;

    $metadeDaIdade = 18.9;

    //Boolean

    $Verdadeiro = true;

    $Falso = false;

    //Array

    $Array = array($nome, $idade, $valor, $idade2);

    //operadores aritméticos

    //divisão
    $divisao = (5/7);

    //mostra o tipo de dado
    var_dump($divisao);

    //adição
    $adicao = 2 + 8;

    //subtração
    $subtracao = 2 - 9;

    //multiplicação
    $multiplicacao = 5 * 8;

    //resto de divisão
    $resto = 7 % 3;

    //concatenação
    echo "o resultado é $adicao \n";


    echo "meu nome é $Array[0] eu tenho $Array[1] anos \n";


    //loop -> laço de repetição
    for($i = 0; $i < 11; $i++){

        $calculadora = (2 * $i);
        echo "2 X $i = $calculadora \n";
    }

    //usando operadores de comparação e aritméticos para checar se a variavel é ímpar ou par
    $numeroPar = 2;

    $numeroImpar = 3;

    if($numeroPar % 2 == 0){
        echo "$numeroPar é par \n";
    }else{
        echo "$numeroPar é ímpar \n";
    }

    if($numeroImpar % 2 == 0){
        echo "$numeroImpar é par \n";
    }else{
        echo "$numeroImpar é Impar \n";
    }

    //Data
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR');  
    print ucfirst(gmstrftime('%A, %d de %B de %Y'));

    //array
    $arrayArmazem = array(0, 1, 2);

    //for each para percorrrer um array
    foreach ($arrayArmazem as &$value) {
    }
    print_r($arrayArmazem);

    //quantos dias tem em um mês especifico

    $funcao = new DateTime("2018-08");

    $numDias = $funcao->format('t');
    echo $numDias
?>