<?php

$arr = [1,2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$y = count($arr);

for($i=0; $i < $y; $i++){

if( $arr[$i] % 2 ==0 ){

  echo "o numero " . $arr[$i] . " é par. <br>";
}

}