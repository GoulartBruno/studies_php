<?php


$a = 10;
$b = "Bruno";
$c= 89;

if(is_int($a)){

  echo "Essa variavel é número <br>";

 $x = $a * 2;

  if($x > 100){

    echo "O resultado da multiplicação final é maior que 100 <br>";

  }else{

    echo "O resultado da multiplicação final é menor que 100 <br>";
  
  }
}else{

  echo " essa variavel não é um número <br>";
  
}


if(is_int($b)){

  echo "Essa variavel é número <br>";

 $x = $b * 2;

  if($x > 100){

    echo "O resultado da multiplicação final é maior que 100 <br>";

  }else{
    echo "O resultado da multiplicação final é menor que 100 <br>";
  }
}else{
  echo " Essa variavel não é um número <br>";
}

if(is_int($c)){

  echo "Essa variavel é número <br>";

 $x = $c * 2;

  if($x > 100){
    echo "O resultado da multiplicação final é maior que 100 <br>";

  }else{
    echo "O resultado da multiplicação final é menor que 100 <br>";
  }
}else{

  echo " Essa variavel não é um número <br>";

}