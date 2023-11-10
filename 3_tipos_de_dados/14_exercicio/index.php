<?php

$carro =[
  'modelo'=> 'corsa', 
  'ano'=> 2014, 
  'cor'=>'azul',
  'teto_solar'=>TRUE];

echo $carro['modelo'];

echo "<br>";

echo $carro['ano'];
echo "<br>";
echo $carro['cor'];
echo "<br>";
echo $carro['teto_solar'];
echo "<br>";
echo "<br>";


print_r( $carro);

