<?php

if(10 > 2){

  echo " Entrou no primeiro if <br>";

  if("teste" == "teste"){
    echo " entrou no segundo if <br>";
  }

}


if(10 > 2){

  echo " Entrou no primeiro if <br>";

  if("teste" !== "teste"){
    echo " entrou no segundo if <br>";
  }else{
    echo " entrou no segundo else <br>";
  }

}else{
  echo " entrou no primeiro else <br>";
}


if(10 < 2){

  echo " Entrou no primeiro if <br>";

  if("teste" !== "teste"){
    echo " entrou no segundo if <br>";
  }else{
    echo " entrou no segundo else <br>";
  }

}else{
  echo " entrou no primeiro else <br>";
}


$escopo = 10;

if(10 > 2){

  echo " Entrou no primeiro if <br>";

  if("teste" == "teste"){
    echo " entrou no segundo if <br>";
    echo $escopo . "<br>";

  }else{
    echo " entrou no segundo else <br>";
  }

}else{
  echo " entrou no primeiro else <br>";
}