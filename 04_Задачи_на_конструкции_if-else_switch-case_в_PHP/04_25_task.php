<?php

/* 
 Дана строка из 3-х цифр. Найдите сумму этих цифр. То есть сложите как 
 числа первый символ строки, второй и третий. 
 */

function mySummOfElementsOfString(string $param ): int {
    
    $sum = 0;
    
    for($i = 0; $i < strlen($param); $i++) {
        
        $sum += (int)$param[$i];
    }
    
    return $sum;
    
}

 $str1 = '123';
 $str2 = '456';
 $str3 = '789';
 $str4 = '876';
 
echo "Дана строка из 3-х цифр. Найдите сумму этих цифр. ";
var_dump($str1);
echo ' = ';
echo mySummOfElementsOfString($str1) . '<br /><br />';

echo "Дана строка из 3-х цифр. Найдите сумму этих цифр. ";
var_dump($str2);
echo ' = ';
echo mySummOfElementsOfString($str2) . '<br /><br />';

echo "Дана строка из 3-х цифр. Найдите сумму этих цифр. ";
var_dump($str3); 
echo ' = ';
echo mySummOfElementsOfString($str3) . '<br /><br />';

echo "Дана строка из 3-х цифр. Найдите сумму этих цифр. ";
var_dump($str4);
echo ' = ';
echo mySummOfElementsOfString($str4) . '<br /><br />';