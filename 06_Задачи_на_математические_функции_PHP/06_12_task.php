<?php

/*
  Дан массив в числами, к примеру [1, 2, -1, -2, 3, -3].
  Создайте из него новый массив так, чтобы отрицательные числа стали
  положительными, то есть у нас должен получиться такой массив:
  [1, 2, 1, 2, 3, 3].
 */

function myABStoARRAY($param) {

    foreach ($param as $key => $value) {

        if ($value < 0) {

            $param[$key] = abs($value);
        }
    }

    return $arr = $param;
}

$arr = [1, 2, -1, -2, 3, -3];

echo '<pre>';
print_r($arr);
echo '</pre><br /><br />';

$arr = myABStoARRAY($arr);

echo '<pre>';
print_r($arr);
echo '</pre><br /><br />';
