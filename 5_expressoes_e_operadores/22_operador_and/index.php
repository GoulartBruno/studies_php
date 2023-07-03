<?php

if(5 > 10 && 10 > 5){

echo "a afirmação 1 é verdadeira <br>";
}

if(50 > 10 && 10 > 5){

  echo "a afirmação 2 é verdadeira <br>";
  }

  if(50 > 10 && 10 > 500){

    echo "a afirmação 3 é verdadeira <br>";
    }

    if(4 > 10 && 10 > 500){

      echo "a afirmação 4 é verdadeira <br>";
      }
      
      
      $a = 10;
      $b = 5;
      $c = 12;
      $d = 12;

      if($a > $b && $c == $d){
        echo "a afirmação 5 é verdadeira <br>";
      }

      if($b <= $a && $c >= $d){
        echo "a afirmação 6 é verdadeira <br>";
      }


      if($b === $a && $c > $d){
        echo "a afirmação 7 é verdadeira <br>";
      }

      if(($b <= $a && $c >= $d) && $a >= $b){
        echo "a afirmação 8 é verdadeira <br>";
      }