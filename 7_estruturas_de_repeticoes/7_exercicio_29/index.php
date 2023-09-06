<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$x = count($arr);


$y = 0;

while($y < $x){

  $numeroAtual = $arr[$y];

if($numeroAtual === 30 || $numeroAtual === 40){

  echo " loop no numero " .  $numeroAtual . " não executado<br>";


  $y++;
  continue;


}

echo "executando loop no numero " .  $numeroAtual . "<br>";


  $y++;

}