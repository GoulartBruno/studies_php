<?php


$a = 10;

while($a > 0){

if($a == 5 || $a == 7){

echo "pulou a execução do numero $a <br>";

$a--;

continue;

}

echo "executando o look $a <br>";

$a--;

}