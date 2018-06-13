<?php
//aula 15

echo "funcoes.php <br>";
global $funcoesExecutadas;

function maior($vl1, $vl2, $vl3)
{
    global $funcoesExecutadas;
    $funcoesExecutadas += 1;

    $maior = 0;
    if (( $vl1 > $vl2 ) and ($vl1 > $vl3))
    {
        $maior = $vl1;
    } elseif (( $vl2 > $vl1 ) and ($vl2 > $vl3))
        {
            $maior = $vl2;
        } else {
            $maior = $vl3;
        }
        include("superficie.php"); 
        // echo "O maior numero ($vl1 - $vl2 - $vl3 ) e: " . $maior;
    
}


function circulo($raio)
{
    global $funcoesExecutadas;
    $funcoesExecutadas += 1;

    $raio = pi()*pow($raio, 2);
    //echo "A area do circulo e: $raio";
    return $raio;
}

//maior(circulo(20), circulo(60), circulo(40));


?>
