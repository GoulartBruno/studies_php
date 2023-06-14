<?php

$a = "5";
$b = 12;

$result = $a * $b;

echo $result;

echo '<br>';

echo gettype($result);

echo '<br>';

echo gettype([]);

echo '<br>';

echo gettype(12.2);

echo '<br>';

echo gettype("string");
