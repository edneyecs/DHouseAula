<?php
//exercicio 01

for ($i=0; $i < 100; $i++)
{
    echo "$i - ";
}

echo "<hr>";
//exercicio 02

$parar = rand(1, 100);
echo "Parar no numero $parar <br>";

for ($i=0; $i < $parar; $i++)
{
    echo "$i - ";
}

echo "<hr>";
//exercicio 03 -tabuada do 2

for ($i=0; $i <=10; $i++)
{
    echo "$i * 02 = "  .$i*2 . "<br>";
}

echo "<hr>";
//exercicio 04 

$lancamentos = 0;
$cara = null;

do {
    $moeda = rand(0, 1);
    
    if ($moeda == 1)
    {
        $cara += 1;
    }
    $lancamentos += 1;

} while ($cara < 5);

echo "A moeda foi lançada $lancamentos vezes para atingir $cara  caras <br>";

echo "<hr>";
//exercicio 06

$array = ["Joao", "Maria", "Jose", "Pedro", "Luiz"];

echo "For <br>";
for ($i=0; $i < count($array); $i++)
{
    echo $array[$i] ." ";
}

echo "<br> While <br>";
$cont = 0;
while ( $cont < count($array))
{
    echo $array[$cont] ." ";
    $cont += 1;
}

echo "<br> Do While <br>";
$cont1 = 0;
do {
    echo $array[$cont1] . " ";
    $cont1 += 1;
} while ($cont1 < count($array));


echo "<hr>";
//exercicio 07

$array1 = [1, 34, 6, 9, 10, 34, 4, 8, 5, 11];

echo "For <br>";
for ($i=0; $i < count($array1); $i++)
{
   
    if ($array1[$i] <> 5)
    {
        echo $array1[$i] . " ";
    } else {
        echo "<br>Encontramos um numero 05";
        break;
    }

}

echo "<br> While <br>";
$cont2 = 0;

while ( $cont2 < count($array1))
{
    if ($array1[$cont2] <> 5)
    {
        echo $array1[$cont2] . " ";
        $cont2 += 1;
    } else {
        echo "<br>Encontramos um numero 05";
        break;
    }
}

echo "<br> Do While <br>";

$cont3 = 0;

do{
    if ($array1[$cont3] <> 5)
    {
        echo $array1[$cont3] . " ";
        $cont3 += 1;
    } else {
        echo "<br>Encontramos um numero 05";
        break;
    }
} while ($cont3 < count($array1));


echo "<hr>";
//exercicio 08 e 09

$mascote = array("Animal"=>"Cachorro", "Idade"=>"02", "Altura"=>"2", "Nome"=>"Rex");

foreach($mascote as $x => $x_value) {
    echo "Indice = " . $x . ", Valor = " . $x_value;
    echo "<br>";
}

echo "<hr>";
//exercicio 11

$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas",
"Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava",
"Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin",
"Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino
Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga",
"Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena",
"Polônia"=>"Varsóvia"];

foreach($ceu as $z => $x_value){
    echo "A capital da " . $z . " e " . $x_value;
    echo "<br>";
}

echo "<hr>";
//exercicio 12

$ceu2 = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"]];

    foreach($ceu2 as $pais => $cidades){
        echo "<p>As cidades da : $pais  são";
        foreach($cidades as $cidades){
            echo"<li> $cidades <li>";
            }
        }

    



echo "<hr>";
//exercicio 13



?>