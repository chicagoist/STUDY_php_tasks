<?php

/*
  Для решения задач данного блока вам понадобятся следующие функции: sqrt, pow.

  Возведите 2 в 10 степень. Результат запишите в переменную $st.

 */

function myPOW(int $first, $second) {

    return pow($first, $second);
}

$a = 2;
$b = 10;

$st = myPOW($a, $b);

echo $st . '<br />';
