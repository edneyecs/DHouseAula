<?php

$variavel01 = true;
$variavel02 = false;
$variavel03 = 0;
$variavel04 = 1;
$variavel05 = 6;
$variavel06 = '';
$variavel07 = "3";
$variavel08 = "true";
$variavel09 = 'false';
$variavel10 = null;

function tipoDado($varN)
{
if ( $varN == true )
{
echo 'o valor ' . $varN . ' é verdadeiro.';
}
else
{
echo 'o valor ' . $varN . ' é falso.';
}
}

tipoDado($variavel01);
tipoDado($variavel02);
tipoDado($variavel03);
tipoDado($variavel04);
tipoDado($variavel05);
tipoDado($variavel06);
tipoDado($variavel07);
tipoDado($variavel08);
tipoDado($variavel09);
tipoDado($variavel10);


?>