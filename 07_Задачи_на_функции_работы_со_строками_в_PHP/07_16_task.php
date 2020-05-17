<?php

/* 
Дана строка '31.12.2013'. Замените все точки на дефисы. 
 */

function myReplace( string $str ) {
    
    $str = str_replace('.', '-', $str);
    print_r($str);
    
}

$str = '31.12.2013.года';

myReplace($str);