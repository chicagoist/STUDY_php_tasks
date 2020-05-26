<?php

/*
  Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется
 * сумме вторых трех цифр. Если это так - выведите 'да', в противном случае 
 * выведите 'нет'. 
 */

function mySummOfPartOfStringElements($param) {

    $len = (strlen($param) - 1 );
    $firstlen = $len / 2;

    $sum1 = 0;
    $sum2 = 0;

    for ($i = 0; $i < (strlen($param) / 2); $i++) {

        $sum1 = $sum1 + (int) $param[$i];
    }

    for ($i = (strlen($param) / 2); $i < strlen($param); $i++) {

        $sum2 = $sum2 + (int) $param[$i];
    }

    echo '$sum1 = ' . "$sum1" . '<br />';
    echo '$sum2 = ' . "$sum2" . '<br />';

    if ($sum1 == $sum2) {

        echo 'да <br />';
    } else {

        echo 'нет <br />';
    }
}

$str1 = '006123';

mySummOfPartOfStringElements($str1);
