<?php

/* 
 Дана строка '1234567890'. Разбейте ее на массив с 
элементами '12', '34', '56', '78', '90'. 
 */

function myStrSplit( string $param ): array {
    
    return str_split($param, 2);
    
}

$str = '1234567890';

echo '<pre>';
print_r(myStrSplit($str));
echo '</pre>';
