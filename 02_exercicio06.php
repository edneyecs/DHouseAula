<?php
    $idade = rand(1,20);
    $sexo = "outro";
    $casado = true;

    if ($idade >= 18 && $sexo =="outro")
    {
        echo "> 18 solteiro";
    }
    else 
    {
        echo " < 18 e sexo diferente de outro";
    }

echo "<hr>";
// exercicio  7

    $quantidadeDeAlunos = -1;

    if ($quantidadeDeAlunos) {
        echo "Existem alunos";
        }
        else {
        echo "Não existem";
        }
        
echo "<hr>";
// exercicio 8

    if ($i = 0)
    {
    echo "true";
    }
    else
    {
    echo "false";
    }

echo "<hr>";
// exercicio 9

    $numero = rand(1, 30);
    $nao = "e Impar";
    $sim = "e Par";
    $par = $numero%2 ==0 ? $sim : $nao;

    echo "O numero $numero e $par";

echo "<hr>";
// exercicio 10

    $vlr1 = rand(1, 5);

    switch ($vlr1) {
        case 1:
            echo "O numero e 1";
            break;
        case 2:
            echo "O numero e 2";
            break;
        case 3:
            echo "O numero e 3";
            break;
        default: 
            echo "Nao definido";
            break;
    }   

echo "<hr>";
// exercicio 12

    $x1 = rand(1, 100);
    $y2 = rand(1, 100);
    
    $igual = "Iguais";
    $diferente = "Diferente";


    $resultado = ($x1 > $y2 ? $x1 : $y2) or ($x1 == $y2 ? $igual : $diferente);
    echo "Entre os numeros $x1 e $y2, o maior e $resultado";




?>