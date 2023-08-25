<?php

$x = 3;

switch($x){

  case 0 :
    echo " X é igual a 0 <br>";
    break;
  case 1 :
    echo " X é igual a 1 <br>";
    break;
  case 2 :
    echo " X é igual a 2 <br>";
     break;
  case 3 :
     echo " X é igual a 3 <br>";
      break;
  default:
  echo "X não é igual a nenhum dos valores mencionados <br>";
}


?>

<?php

function verificarCategoria($categoria) {
    
    switch ($categoria) {
        case 'eletrônicos':
          return  "Essa categoria é de produtos eletrônicos";
            break;
         case 'vestuário':
          return  "Essa categoria é de produtos de vestuário";
            break;
        case 'alimentícios':
          return  "Essa categoria é de produtos alimentícios";
            break;
        
        default:
        return  "Categoria desconhecida";
         break;
         }
}

 echo verificarCategoria('alimentícios');


         ?>