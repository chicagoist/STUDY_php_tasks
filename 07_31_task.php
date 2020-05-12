<?php

/* 
 Дана строка '1234567890'. Разбейте ее на массив с 
 элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'. 
 */

function myStrToSplitOne( string $param ): array {
    
    return str_split($param, 1);
    
}

$str = '1234567890';

echo '<pre>';
print_r(myStrToSplitOne($str));
echo '</pre>';