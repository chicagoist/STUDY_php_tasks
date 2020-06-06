<?php

/* 
 Найдите произведение чисел от 1 до 10 не используя цикл. 
 */

$arr = range(1, 10, 1);

$sum = array_product($arr);

echo $sum;