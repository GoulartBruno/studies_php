<?php
function separarDigitosString($numero) {
    $digitos = str_split((string)$numero); // Converte o número para string e depois para array
    return $digitos;
}

$numero = 12;
$digitos = separarDigitosString($numero);

echo "Dígitos do número $numero: ";
foreach ($digitos as $digito) {
    echo $digito . " ";
}
?>