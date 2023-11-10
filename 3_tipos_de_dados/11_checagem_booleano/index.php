<?php

$a= TRUE;

$b=FALSE;


if(is_bool($a)){
  echo "a is boolean <br><br>";
}


if(is_bool("true")){
  echo "0 is not boolean";
}


if(0== false){
  echo "0 is boolean";
}