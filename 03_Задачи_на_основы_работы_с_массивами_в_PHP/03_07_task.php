<?php

/*
  Создайте массив $arr. Найдите сумму элементов этого массива.

  $arr = ['a'=>1, 'b'=>2, 'c'=>3];
 */

function mySummOfElements(array $param): int {

    $summ = 0;

    foreach ($param as $value) {

        $summ += $value;
    }

    return $summ;
}

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

echo mySummOfElements($arr);
