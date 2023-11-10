<?php

echo NULL;

$nome= NULL;

if(is_null($nome)){
  echo 'o valor é nulo!';
}

$nome= "Bruno";

echo '<br><br>';

if(!is_null($nome)){
  echo "$nome não é nulo!";
}