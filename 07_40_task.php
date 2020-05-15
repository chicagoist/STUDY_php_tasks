<?php

/* 
 Дана строка '12345678'. Сделайте из нее строку '12 345 678'. 
 */

function mySplitNumbers( string $param ): string {
    
    return number_format($param, 0, '.', ' ');
    
}

$str = '12345678';

echo mySplitNumbers($str);