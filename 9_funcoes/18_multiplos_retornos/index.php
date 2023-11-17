<?php

function alterarDados ($nome, $idade){

  $nome = "Sr $nome";
  $idade = "$idade Anos";

  return [$nome, $idade];

}

$dados = alterarDados("Bruno", 12);

echo "Olá {$dados[0]}, voce tem {$dados[1]}.";