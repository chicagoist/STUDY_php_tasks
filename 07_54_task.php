<?php

/*
  Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран
  строку '--cd--ef'.
 */

function mySTRSTR(string $param) {

    echo strstr($param, '--cd');
}

$str = 'ab--cd--ef';

mySTRSTR($str);
