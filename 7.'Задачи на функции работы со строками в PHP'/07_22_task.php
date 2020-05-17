<?php

/* 
 Дана строка 'abc abc abc'. Определите позицию последней буквы 'b
 */

function mySTRRPOS( string $str ) {
    
    echo strrpos($str, 'b');
    
}

$str = 'abc abc abc';

mySTRRPOS($str);