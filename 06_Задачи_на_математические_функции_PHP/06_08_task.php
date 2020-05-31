<?php

/*
  Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.
 */

function myMaxMin($param) {

    $a = func_get_args();

    echo 'Максимальное число = ';
    echo max($a) . '<br /><br />';

    echo 'Минимальное число = ';
    echo min($a) . '<br /><br />';
}

echo '<br /><br />';
myMaxMin(4, -2, 5, 19, -130, 0, 10);

$arr = [4, -2, 5, 19, -130, 0, 10];


echo 'Максимальный элемент в массиве = ';
echo max($arr);
echo '<br /><br />';


echo 'Минимальный элемент в массиве = ';
echo min($arr);
echo '<br /><br />';
