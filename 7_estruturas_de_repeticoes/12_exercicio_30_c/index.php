<?php

$arr = [];
$y = 0;

for($i = 10; $i <=20; $i++){

  array_push($arr, $i);

  if($arr[$y] % 2 !=0){

    echo $arr[$y] . "<br>";
  }
  $y++;
}


print_r($arr);