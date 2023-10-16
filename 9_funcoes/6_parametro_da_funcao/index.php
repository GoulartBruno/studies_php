<?php

function velocidadeMax($vel){

  if(is_int($vel)){
    echo "O carro atinge a velocidade máxima de $vel km/k <br>";
  }else{
    echo "O valor precisa ser um número. <br>";
  }

}


velocidadeMax(100);
velocidadeMax(200);
velocidadeMax("200");


velocidadeMax(10, 200);

function descrevaAnimal($nome, $raca){
$result =  "O $nome é da $raca <br>";

return  $result;
}


echo descrevaAnimal("bob","vira lata");
echo descrevaAnimal("bob","vira lata");