<?php

/* 
 Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, 
 должен работать с любыми аналогичными строками. 
 */

function myFunctionForChangeStr( string $param ): string {
    
    $param = ucwords($param, "_");
    $param = lcfirst($param);
    return str_replace('_', '', $param);
    
}

$str = 'var_test_text';

echo myFunctionForChangeStr($str);


