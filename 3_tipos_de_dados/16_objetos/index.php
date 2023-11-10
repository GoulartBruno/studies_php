<?php

class Pessoa {

  function falar () {
    echo "Ola pessoal";
  }
}

$bruno = new Pessoa();

$bruno->nome = "Bruno";

echo $bruno -> nome;

echo "<br><br>";

$bruno -> falar();

echo "<pre>";
print_r($bruno);
echo "</pre>";
