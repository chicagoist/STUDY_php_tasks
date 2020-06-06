<?php

/* 
Создайте строку '1-2-3-4-5-6-7-8-9
 */

$arr = range(1, 9);

$str = implode('-', $arr);

echo $str;