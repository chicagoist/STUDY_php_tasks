<?php

/*
  Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'.
 * Если это так, выведите 'да', если не так - 'нет'. 
 */

function testOfHttp(string $test) {

    if (substr($test, 0, 7) == 'http://' || substr($test, 0, 8) == 'https://') {

        print_r("Да");
        echo'<br />';
    } else {

        print_r("нет");
        echo'<br />';
    }
}

$str1 = 'http:/ google.com';
$str2 = 'https://google.com';

testOfHttp($str1);
testOfHttp($str2);

/*
if( substr($str1, 0, 7) == 'http://' || substr($str1, 0, 8) == 'https://'){
    
    print_r("Да");
    echo'<br />';
    
} else {
    
    print_r("нет");
    echo'<br />';
    
}
*/

/*
if( substr($str2, 0, 7) == 'http://' || substr($str2, 0, 8) == 'https://'){
    
    print_r("Да");
    echo'<br />';
    
    
} else {
    
    print_r("нет");
    echo'<br />';
    
}
*/