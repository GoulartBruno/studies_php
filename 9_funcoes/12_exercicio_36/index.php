<?php


function criadoArray(){
  $arr = [];
  $y = 50;
  $i = 1; 
  
while($i <= $y){

  if ($i <=7 ){

    $i++;
    continue;

  }else{  
    
    array_push($arr, $i);
    $i++;

  }

  $arrayFinal = implode("<br> ", $arr);




};

 return  $arrayFinal;
}


echo criadoArray();



function arryFor(){
  $arr = [];
  for($i = 0; $i <= 30; $i++){
    array_push($arr, $i);
  }

  $novoArray = [];

  for($j = 0; $j<= count($arr); $j++){

    if($j > 7){
      array_push($novoArray, $j);
      $j++;

    }

  }

  $result = implode(", ", $novoArray);

  return $result;

}

echo arryFor();

?>

