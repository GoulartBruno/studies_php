<?php

if(5 > 2 || 3 < 4){
echo "a operação 1 é verdadeira <br>";
}

if(5 > 2 || 3 < 2){
  echo "a operação 2 é verdadeira <br>";
  }

  if(5 > 20 || 3 < 4){
    echo "a operação 3 é verdadeira <br>";
    }

    if(5 > 40 || 3 < 2){
      echo "a operação 4 é verdadeira <br>";
      }

      $a = 10;
      $b = 20;
      $c = 30;
      $d = 40;

      if($a < $b || $c < $a){
        echo "a operação 5 é verdadeira <br>";
        }

        if($d < $b || $c < $a){
          echo "a operação 6 é verdadeira <br>";
          }

          if(($d > $b || $c > $a) && $a < $d){
            echo "a operação 7 é verdadeira <br>";
            }

            if(($d < $b || $c < $a) && $a < $d){
              echo "a operação 8 é verdadeira <br>";
              }