<?php

function sumEvenNumbers($number){

$soma = 0;

for ($i = 1; $i <=$number; $i++) {
    if ( $i %2 === 0 ){

        $soma += $i ;
    }
    
}
return $soma;
}



function countNumbers($number){

  $soma = 0;
  
  for ($i = 1; $i <=$number; $i++) {
  
          $soma += $i ;
      
      
  }
  return $soma;
  }
  
  
  echo "<br>". sumEvenNumbers(4) . "<br>";
  echo countNumbers(5) . "<br>";