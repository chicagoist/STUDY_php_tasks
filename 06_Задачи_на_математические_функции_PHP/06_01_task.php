<?php

/*
  Даны переменные $a=10 и $b=3. Найдите остаток от деления $a на $b.
 * 
 */

function myFindRemainder(int $first, $second): float {

    return $first % $second;
}

$a = 10;
$b = 3;

echo myFindRemainder($a, $b);
