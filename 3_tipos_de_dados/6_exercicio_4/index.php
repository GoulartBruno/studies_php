<?php

$a= 12.8;

$b=10;

$c= -2.3547;

$d= 7.57;

if(is_float($a)){
  echo "a is float <br><br>";
}

if(is_float($b)){
  echo "b is float<br><br>";
}

if(is_float($c)){
  echo "c is float<br><br>";
}

if(is_float($d)){
  echo "d is float<br><br>";
}


if(!is_int($d)){
  echo "d isn't interger<br><br>";
}