<?php


function isPrime($num){
 
    if($num < 2){
 
        return false;
        
    }
 
    for ($i = 2; $i <= sqrt($num); $i++){
 
        if ($num % $i == 0){
 
            return false;
 
        }
    }
 
     return true;
 
}
 
$resultado = isPrime(5);
echo "O número 5 é primo? " . ($resultado ? "Sim <br>" : "Não <br>" );
 



?>

<?php

function verPrimos($num){

  if($num<2){
    
    echo "o número $num não é primo";


    return false;
  
  }

  for($i = 2; $i < sqrt($num); $i++){

    if($num % $i ==0){

      echo "o número $num não é primo";
      return false;
    }


  }

  echo "o número $num é primo";
return true;
}


verPrimos(5);