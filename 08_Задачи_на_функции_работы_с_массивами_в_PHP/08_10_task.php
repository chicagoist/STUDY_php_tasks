<?php

/* 
Найдите сумму чисел от 1 до 100 не используя цикл. 
 */

$arr = range(1, 100, 1);

$sum = array_sum($arr);

echo $sum;