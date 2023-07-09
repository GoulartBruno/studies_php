<?php

$a = (int) "12";

echo $a;

echo "<br>";

echo $a + 10;

echo "<br>";


if($a === 12){
  echo "a afirmação 1 é verdadeira <br>";
}

$b = (float) "3.1435268";

if($b === 3.1435268){
  echo "a afirmação 2 é verdadeira <br>";
}

if(is_float($b)){
  echo "a afirmação 3 é verdadeira <br>";
}

if(is_int($b)){
  echo "a afirmação 4 é verdadeira <br>";
}

$c = (string) 34;


if($c === "34"){
  echo "a afirmação 5 é verdadeira <br>";
}

if(is_string($c)){
  echo "a afirmação 6 é verdadeira <br>";
}