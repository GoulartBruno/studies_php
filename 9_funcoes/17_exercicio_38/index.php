<?php

function recebeItens($itens){
  $resultado= implode(", ", $itens);

return $resultado;
}



$arr= ["biscoito", "trigo", "refri", "chocolate"];


echo recebeItens($arr);

?>

<?php

function levouItens($itens2){

  $comidas= "voce comprou: ";
  $length= count($itens2);

for($i = 0; $i < $length ; $i++){

  if($i >= $length - 1){
  $comidas .= "{$itens2[$i]}. ";
  }else{
    $comidas .= "{$itens2[$i]}, ";

  }

}

return $comidas;

}

$arr2= ["biscoito", "trigo", "refri", "chocolate"];


echo levouItens($arr2);

