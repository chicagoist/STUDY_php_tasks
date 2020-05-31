<?php

/*
  Заполните массив 10-ю случайными числами.
 */

$arr = [];

for ($i = 0; $i <= 9; $i++) {

    $arr[] = mt_rand();
}

echo '<pre>';
print_r($arr);
echo '</pre>';
