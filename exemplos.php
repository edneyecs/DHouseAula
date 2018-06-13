<?php
    $x = 1;

    while ($x <=50 ) {
        echo "$x - ";
        $x++;
    }


echo "<hr>";
// do while
    $y = 1;

    do {
        echo "Numero: $y  <br>";
        $y++;
    } while ($y <= 5);


echo "<hr>";
// for

for ($a = 0; $a <=5; $a++) 
{
    echo "O valor e:  $a <br>";
}


echo "<hr>";
//foreach / funciona somente em matrizes

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value)
{
    echo "$value <br>";
}

echo "<hr>";
// function

function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Joao");
familyName("Stale");
familyName("Kai Jim");

echo "<hr>";
// function


function familyName2($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Jani", "1975");
familyName2("Joao", "1977");
familyName2("Stale", "2910");
familyName2("Kai Jim", "2030");



echo "<hr>";
// function passando dois arametros

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) ."<br>";
echo "15 + 20 = " . sum(15,20) ."<br>";
echo "15 + 30 = " . sum(15,30) ."<br>";


echo "<hr>";
//Loop matriz associativa

$age = array("Peter"=>"40", "Ben"=>"37", "Joe"=>"43");
asort($age); //classifica a matriz associativa em ordem crescente

foreach($age as $x => $x_value)
{
    echo "Key=" . $x . ", Value=" .$x_value;
    echo "<br>";
}


echo "<hr>";
// classifica os elementos em ordem alfabetica crescente
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x=0; $x <$clength; $x++)
{
    echo $cars[$x];
    echo "<br>";
}


echo "<hr>";
//variaveis globais

$g1 = 75;
$g2 = 25;

function addition()
{
    $GLOBALS['s'] = $GLOBALS['g1'] + $GLOBALS['g2'];
}

addition();
echo $s;

echo "<hr>";
// passando varios parametros sem sabero numero de parametros

function somaTudo()
{
    $lista = func_get_args();
    $qntd = func_num_args();
    $total = 0;

    for ($i=0; $i < $qntd; $i++) {
        $total += $lista[$i];
    }
    
    echo " A soma de todos produtos e: " .$total;
}     

somaTudo(rand(1,20));

echo "<hr>";
// passando varios parametros sem sabero numero de parametros

function somaTudo2()
{
    $lista = func_get_args();
    $total = 0;

    foreach ($lista as $item) {
        $total += $item;
    }
    
    echo " A soma de todos produtos e: " .$total;
}     

somaTudo2(rand(1,20));

echo "<hr>";
//recebendo uma lista de valores na variavel

function media(...$valores){
    $total = array_sum($valores) / count($valores);
    return $total;

}
echo media(5, 5, 10);

echo "<hr>";
// Null Coalesce Operador 
// Valida a entrada de dados
// ?ddd=11&telefone=94656-7789

$ddd = $_GET['ddd'] ?? "00";
$telefone = $_GET["telefone"] ?? $_GET["celular"] ?? "00000-00000";

echo "Telefone: ($ddd) $telefone";

echo "<hr>";
// Operador spaceshift
// compara o valor de x <=> y

foreach (range(0,9) as $v) {
    
    $x = rand(0,9);
    $rel = $v <=> $x;

    echo "v=$v <=> x=$x e $rel <p>";
}


?>