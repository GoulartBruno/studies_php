<?php


function defineCorCarro($cor = "vermelho"){

  if(!is_string($cor)){
    echo " você precisa digitar uma cor valida. <br>";
  }else{
    echo " a cor do carro é $cor <br>";
  }


}


defineCorCarro(true);
defineCorCarro();