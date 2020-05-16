<?php

/* 
 Нарисуйте пирамиду, как показано на рисунке. 
 Решите задачу с помощью одного цикла
 * 
1
22
333
4444
55555
666666
7777777
88888888
999999999 
 */


function myRepeatStringOfNumbers(int $param) {

    for ($i = 1; $i <= $param; $i++) {

        echo str_repeat($i, $i) . '<br />';
    }
}

myRepeatStringOfNumbers(9);