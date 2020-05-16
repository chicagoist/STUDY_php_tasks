<?php

/* 
Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите 
на экран строку '-ef'.
 */

function mySTRRCHR( string $param ) {
    
    echo strrchr($param, '-e');
    
}

$str = 'ab-cd-ef';

mySTRRCHR($str);