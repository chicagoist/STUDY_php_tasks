<?php

/* 
 Дана строка '1234567890'. Сделайте из нее 
 строку '12-34-56-78-90' не используя цикл.
 */

function myStrToArrayToStr( string $param ): string {
    
    $array = str_split($param, 2);
    return implode('-', $array);
    
}

$str = '1234567890';

echo '<pre>';
print_r(myStrToArrayToStr($str));
echo '</pre>';