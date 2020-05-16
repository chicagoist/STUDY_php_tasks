<?php

/* 
Дана строка. Если в этой строке более 5-ти символов - вырежите из нее 
 * первые 5 символов, добавьте троеточие в конец и выведите на экран. 
 * Если же в этой строке 5 и менее символов - просто выведите эту строку 
 * на экран. 
 */

function checkFive(string $str) {
    
    if ( strlen($str) <= 5 ) {
        
        print_r($str);
        echo '<br />';
        
    }else {
        
        $str1 = substr( $str, 5);
        echo '...' . $str1;
        echo '<br />';
        
    }
}

$str1 = 'hhh';
$str2 = 'hello_world';

checkFive($str1);
checkFive($str2);
