
<?php
// Aula 16 - 12/06/2018
echo "Imprimir.php <br><br>";

$como = $_POST["como"];
$sexo = $_POST["sexo"];
$sono = $_POST["sono"];

// Exercicio - 02 A
echo "Nome:   " . $_POST["nome"] . "<br>";
echo "E-mail: " . $_POST["email"] . "<br>";

/*
echo "<hr>";
// Exercicio - 02 B

foreach ($_POST as $key => $valor) 
{
    echo "Chave: " . $key . " Valor: " .$valor . "<br>";
}    
*/
echo "<hr>";
// Exercicio - 02 B

echo "Conheceu o site atraves de : <br>";
foreach($como as $key => $value)
{
    echo  $value . "<br>";
}

echo "Sexo: " . $sexo . "<br>";

echo "Dormiu bem ontem(1-10): " . $sono . "<br>";

echo"<hr>";

//Exericicio 05

foreach (getAllHeaders() as $chave => $valor) {
    echo "$chave: $valor <br>";
}

echo "<hr>";
//Exercico 06

echo "_SERVER <br>";
var_dump($_SERVER);
echo "<hr>";
echo "_FILES <br>";
var_dump($_FILES);
echo "<hr>";
echo "_REQUEST <br>";
var_dump($_REQUEST);
echo "<hr>";
echo "_SESSION <br>";
var_dump($_SESSION);
echo "<hr>";
echo "_ENV <br>";
var_dump($_ENV);
echo "<hr>";
echo "_COOKIE <br>";
var_dump($_COOKIE);
echo "<hr>";
echo "_GLOBALS <br>";
var_dump($GLOBALS);
echo "<hr>";


?>