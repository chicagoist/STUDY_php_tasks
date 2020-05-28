<?php

/*
  Дан массив с числами. Числа могут быть положительными и отрицательными.
 * Найдите сумму положительных элементов этого массива. 
 */

$arr = [];

for ($i = 0; $i <= 10; $i++) {

    $arr[$i] = mt_rand(-10, 10);
}

echo '<pre>';
print_r($arr);
echo '</pre>';

$result = 0;

foreach ($arr as $value) {

    if ($value >= 0) {

        $result += $value;
    }
}

echo '<br /><br />';

echo $result;
