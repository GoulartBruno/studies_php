<?php

$a = (int) "testando";
$b = (int) 12.9;
$c = (int) true;
$d = (int) [1, 2, 3];

echo $a;

echo "<br>";

echo $b;

echo "<br>";

echo $c;

echo "<br>";

echo $d;

echo "<br>";

if(is_int($a)){
  echo "a afirmacão 1 é verdadeira <br>";
}

if(is_int($b)){
  echo "a afirmacão 2 é verdadeira <br>";
}

if(is_int($c)){
  echo "a afirmacão 3 é verdadeira <br>";
}

if(is_int($d)){
  echo "a afirmacão 4 é verdadeira <br>";
}

