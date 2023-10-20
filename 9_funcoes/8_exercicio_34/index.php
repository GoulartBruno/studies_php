<?php

function parOuImpar($num){
  if($num % 2 ===0){
    echo "$num é um número par. <br>";
  }else{echo "$num é um número impar.<br>";}
}


parOuImpar(11);
parOuImpar(10);
parOuImpar(8);
parOuImpar(12);