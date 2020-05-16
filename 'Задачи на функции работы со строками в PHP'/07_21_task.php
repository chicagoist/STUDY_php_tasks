<?php

/* 
 Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'. 
 */

function mySTRPOS( string $str ) {
    
    echo strpos($str, 'b');
    
}

$str = 'abc abc abc';

mySTRPOS($str);