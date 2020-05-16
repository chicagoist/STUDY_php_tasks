<?php

/* 
 Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран 
 строку '-cd-ef'. 
 */


function mySTRCHR( string $param ) {
    
    echo strchr($param, '-c');
    
}

$str = 'ab-cd-ef';

mySTRCHR($str);