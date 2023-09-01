<?php


$y=4;
$limite= 30;

while($y <= $limite){

  echo $y . "<br>";

  $y += 2; 

  if($y === 24){
    echo $y . "<br>";
    echo " Terminando o loop no numero 24 <br>";
    break;
  }
}