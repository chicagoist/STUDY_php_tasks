<?php

/*
  Дан массив $arr. Подсчитайте количество элементов этого массива.
 */

function myCountOfArray(array $arr) {

    echo'<pre>';
    print_r($arr);
    echo '</pre><br /><br />';

    echo 'Количество элементов массива равно = ' . count($arr);
}

$arr = [];

for ($i = 1; $i < rand(5, 50); $i++) {

    $arr[] = $i;
}

myCountOfArray($arr);
