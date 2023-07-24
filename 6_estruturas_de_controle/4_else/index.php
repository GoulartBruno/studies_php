<?php



if(5 > 2){
  echo "entrou no if <br>";
}else{
  echo " entrou no else <br>";
}


if("teste" === 2){
  echo "entrou no if <br>";
}else{
  echo " entrou no else <br>";
}

$a = 10;
$b = 20;


if($a > $b){
  echo "entrou no if 3 <br>";
}else{
  echo " entrou no else 3 <br>";
}


$msg = " entrou no else 3 <br>";

if($a > $b){
  echo "entrou no if 4 <br>";
}else{
  echo $msg;
}