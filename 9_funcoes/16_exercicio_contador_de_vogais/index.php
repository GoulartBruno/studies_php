<?php

function countVowels($valor){

$length = strlen($valor);

$vogaisPresente= [];

for($i = 0; $i < $length; $i++ ){
  
  if($valor[$i] == "a" || $valor[$i] == "A" || $valor[$i] == "e" || $valor[$i] == "e" || $valor[$i] == "i" || $valor[$i] == "I" || $valor[$i] == "o" ||$valor[$i] == "o" || $valor[$i] == "u" || $valor[$i] == "u" ){

    array_push($vogaisPresente, $valor[$i]);
  }

}

$resultado = count($vogaisPresente);

return $resultado;

}

echo "Quantidade de vogais: " .countVowels("Baeno ououoa");


?>

<?php

function countVowels2($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $contadorVogais = 0;

    // Iterar sobre cada caractere da string
    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];


        
        // Verificar se o caractere é uma vogal
        if (in_array($caractere, $vogais)) {
            $contadorVogais++;
        }
    }

    // Retornar a quantidade de vogais encontradas
    return $contadorVogais;
}

$texto = "Ola mundo!";
echo "Quantidade de vogais: " . countVowels2($texto);

  
?>

<?php
function testanto($frase){
  $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
  $contadorDeVogais = 0;

  for($i = 0; $i < strlen($frase); $i++){

    $caracte = $frase[$i];

    if(in_array($caracte, $vogais) ){
      $contadorDeVogais++;
    
    }
  }
return $contadorDeVogais;

}

echo "Quantidade de vogais: " . testanto("bruino");
