<?php

/*
  Дан массив $arr. С помощью функций array_sum и count найдите среднее
 * арифметическое элементов (сумма элементов делить на их количество) данного 
 * массива. 
 */

function myAveradeFromArray(array $param) {

    echo'<pre>';
    print_r($param);
    echo '</pre><br /><br />';

    echo 'Среднее арифметическое данного массива = ' . (array_sum($param) / 
            count($param));
}

$arr = [1, 2, 3, 4, 5];



myAveradeFromArray($arr);