<?php

$teste= 'macaco';

echo "$teste global 1 <br>";



if(5>2){
  $teste= "peru";

  echo "$teste if <br>";
}


echo "$teste global 2 <br>";


function funcao(){

  $teste="galinha";
  echo "$teste local 2 <br>";

};

funcao();

function testantoGlobal (){
global $teste;
echo "$teste global funcao";

}

testantoGlobal();