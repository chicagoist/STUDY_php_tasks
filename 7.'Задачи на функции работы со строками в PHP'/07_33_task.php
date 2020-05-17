<?php

/* 
 Дана строка. Очистите ее от концевых пробелов. 
 */

function myTrimStr( string $param ): string {
    
    return ltrim(rtrim($param)); // ;) 
    
}

$str = '    Дана строка. Очистите ее от концевых пробелов.         ';

echo '*' . myTrimStr($str) . '*';