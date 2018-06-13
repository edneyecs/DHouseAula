<?php
// 02 - A / triangulo

    function triangulo($base, $altura)
    {
       
        $Atriangulo = $base * $altura / 2;
        echo "A area do triangulo ($base, $altura) e: " . $Atriangulo;
    }

    triangulo(10, 20);


echo "<hr>";
// 02 - B / retangulo

function retangulo($altura, $comprimento)
{
    $retangulo = $altura*2 + $comprimento*2;
    echo "A area do retangulo ($altura, $comprimento) e: " . $retangulo;
}

retangulo(10, 20);

echo "<hr>";
// 02 - C / quadradro

function quadrado($Qaltura)
{
    $quadrado = $Qaltura*4;
    echo "A area do quadrado e: " . $quadrado;
}

quadrado(10);

echo "<hr>";
// 02 -D / circulo

function circulo($raio)
{
    $raio = pi()*pow($raio, 2);
    echo "A area do circulo e: $raio";
}

circulo(20);


?>
