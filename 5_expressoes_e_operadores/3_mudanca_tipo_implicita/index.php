<?php

echo 5/2;

echo "<br>";

if(is_float(5/2)){

  echo "o resultado é float";
}

echo "<br>";

if(is_string(5 . 2)){

  echo "o resultado é string";
}

echo "<br>";


$nome = "Bruno";
$sobrenome= "Goulart";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
