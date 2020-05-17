<?php

/* 
 Дана строка $str. Замените в ней все буквы 'a' на цифру 1, 
 * буквы 'b' - на 2, а буквы 'c' - на 3. 
 */

function myReplace( string $str ) {
    
    echo 'Решение :<br />';
    echo str_replace(['a','b','c','а','б','в'], [1, 2, 3, 1, 2, 3 ], $str);
    
}

$str = "Replace all the letters 'a' with the number 1, the letters 'b' by 2, "
        . "and the letters 'c' by 3.";

$str1 = "Дана строка \$str. Замените в ней все буквы 'а' на цифру 1, "
        . "буквы 'б' - на 2, а буквы 'в' - на 3.";

print_r($str);
echo '<br />';
myReplace($str);
echo '<br /><br />';

print_r($str1);
echo '<br />';
myReplace($str1);