<?php

/*
  Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите корень из суммы
  квадратов его элементов. Для решения воспользуйтесь циклом foreach.
 */

function mySqrtFromMyArray(array $param) {

    $srt = 0;

    foreach ($param as $value) {

        $srt += pow($value, 2);
    }

    return sqrt($srt);
}

$arr = [4, 2, 5, 19, 13, 0, 10];

echo mySqrtFromMyArray($arr);