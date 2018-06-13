<?php

$NumeroMagico = 10;

// 01 - A

function maior($vl1, $vl2, $vl3)
{
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
    echo "O maior numero ($vl1 - $vl2 - $vl3 ) e: " . $maior; 
}

maior(100, 45, 30);


echo "<hr>";
// 01 - B

function tabela($inicio, $fim)
{
    $Varray = [];

    for ($i= $inicio; $i < $fim; $i++)
    { 
      array_push($Varray, $i);
    }
    return $Varray;
}

var_dump(tabela(1, 10));


echo "<hr>";
// 01 - D


function maior2($vl1, $vl2 , $vl3 = 0)
{
    global $NumeroMagico;

    $vl3= $NumeroMagico;

    $maior2= 0;

    if (( $vl1 > $vl2 ) and ($vl1 > $vl3))
    {
        $maior2 = $vl1;
    } elseif (( $vl2 > $vl1 ) and ($vl2 > $vl3))
        {
            $maior2 = $vl2;
        } else {
            $maior2 = $vl3;
        }
    echo "O maior numero ($vl1 - $vl2 - $vl3 ) e: " . $maior2; 
}

maior2(300, 45);


echo "<hr>";
// 01 - E

function tabela2($inicio, $fim = 0)
{
    global $NumeroMagico;
    $fim = $NumeroMagico;
    $Varray = [];
    
    for ($i= $inicio; $i < $fim; $i++)
    { 
      array_push($Varray, $i);
    }
    return $Varray;
}

var_dump(tabela2(1));


echo "<hr>";
//07
$existe = "php";
$frase ="Odeio php. Eu tambem odeio php!";
echo $frase . "<br>";
$result = strpos($frase, $existe);

echo "A palavra  $existe esta localizada na posicao $result da frase acima.";

echo "<hr>";
// 08

?>