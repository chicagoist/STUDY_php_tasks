<?php

/*
  Дан массив $arr. С помощью функции count выведите последний элемент данного
 * массива. 
 */

function myLastElementOfArray() {


    $arr = [];

    for ($i = 1; $i < rand(5, 50); $i++) {

        $arr[] = $i;
    }

    echo'<pre>';
    print_r($arr);
    echo '</pre><br /><br />';

    echo 'Последний элемент массива = ' . $arr[count($arr) - 1];
}

myLastElementOfArray();