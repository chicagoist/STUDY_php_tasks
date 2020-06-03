<?php

/*
  Создайте массив, заполненный числами от 1 до 100. Найдите сумму элементов
 * данного массива.
 */

function myNewArrayAndSumm() {

    for ($i = 1; $i <= 100; $i++) {

        $arr[] = $i;
    }

    $sum = 0;
    foreach ($arr as $value) {

        $sum += $value;
    }

    echo 'Сумма элементов массива равна = ' . $sum . '<br /><br />';

    echo'<pre>';
    print_r($arr);
    echo '</pre><br /><br />';
}

function myArraySumSecond() {

    echo 'Второй вариант через функции range, array_sum : ';
    $arr = range(1, 100);

    echo'<pre>';
    print_r($arr);
    echo '</pre><br /><br />';

    echo array_sum($arr);
}

myNewArrayAndSumm();

myArraySumSecond();
