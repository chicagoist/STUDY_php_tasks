<?php

/* 
 Дана строка с символами, например, 'abcde'. Проверьте, что первым символом 
 этой строки является буква 'a'. Если это так - выведите 'да', в противном 
 случае выведите 'нет'. 
 */


function myFirstParamMyString(string $param ) {
    
    if($param[0] == 'a'){
        
        echo 'да<br /><br />';
    }else {
        
        echo 'нет<br /><br />';
    }
    
}

$str1= 'abcde';
$str2 ='hello';

echo "Проверьте, что первым символом строки \"$str1\" является буква 'a'." . 
        '<br />';
echo myFirstParamMyString($str1) . '<br />';

echo "Проверьте, что первым символом строки \"$str2\" является буква 'a'." . 
        '<br />';
echo myFirstParamMyString($str2) . '<br />';