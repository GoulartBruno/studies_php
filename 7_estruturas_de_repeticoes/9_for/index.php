<?php

$j = 0;

$nome = "Bruno";

for($i = 0; $i < 10; $i++){

  if($i == 4){
    echo "$nome <br>";
  }

  if($i == 5 || $i == 6){

    continue;
    $i++;

  }

echo "testando for $i <br>";

}