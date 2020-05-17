<?php

/* 
Дана строка. Проверьте, что она начинается на 'http://'. 
 * Если это так, выведите 'да', если не так - 'нет'. 
 */

$str1 = 'http:/ google.com';
$str2 = 'https://google.com';

if( substr($str1, 0, 7) == 'http://' ){
    
    print_r("Да");
} else {
    print_r("нет");
}
