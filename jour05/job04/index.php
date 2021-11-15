
<?php

$a = 2;
$operation = '-';
$b = 3;

function calcule($a, $operation, $b){

    if ($operation === '*'){
    return $a * $b;}

    if ($operation === '+'){
    return $a + $b;}

    if ($operation === '-'){
        return $a - $b;}

    if ($operation === '/'){
        return $a / $b;}
    if ($operation === '%'){
        return $a % $b;}
}  

echo calcule($a, $operation, $b);