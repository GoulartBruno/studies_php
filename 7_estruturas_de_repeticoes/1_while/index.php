<?php

//definicão do contador
$x = 0;

//inicio 
while($x < 10){

//corpo do loop
echo $x . "<br>";

//incremento
$x++;

}

echo "Continuação <br>";

$y=0;

while($y < 10){

  echo $y . "<br>";
  
  $y +=  2;
  
  }
  
  echo "Continuação <br>";


  $z = 10;

while($z > 0){

  echo $z . "<br>";
  
  $z--;
  
  }
  
  echo "Continuação <br>";

  $a = 10;

while($a > 0){

  if($a % 2 != 0 ){  
    
    echo $a . "<br>";
  }
  
  $a--;
  
  }
  
  echo "Continuação <br>";
