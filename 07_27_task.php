<?php

/* 
 Дана строка 'html css php'. С помощью функции explode запишите каждое 
 слово этой строки в отдельный элемент массива. 
 */

function myStrToArrat( string $str) {
    
    echo '<pre>';
    print_r(explode(' ', $str));
    echo '<pre />';
}

$str = 'html css php';

myStrToArrat($str);

