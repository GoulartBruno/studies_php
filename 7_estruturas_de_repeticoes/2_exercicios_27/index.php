<?php

$arr = [10, TRUE, 22, "Bruno", "string", 4.2554, FALSE, "Michelle", "Erfurt", 55, "numero"];

$x= count($arr);

$y=0;

while($y < $x){

  if(is_string($arr[$y])){

    echo $arr[$y] . "<br>";

  }

  $y++;

}