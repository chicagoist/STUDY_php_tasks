<?php

/* 
Дана строка. Проверьте, что она заканчивается на '.png'. 
 * Если это так, выведите 'да', если не так - 'нет'. 
 */

function testPicture(string $pic) {
    
if(substr($pic, strlen($pic)-4) == '.png' ) {
    
    print_r("да");
    echo '<br />';
    
    }else {
        print_r("нет");
        echo '<br />';
    }
    
}

$str1 = 'picture.jpg';
$str2 = 'picture.png'; 
$str3 = 'picture.jpeg'; 
$str4 = 4;

echo '$str1 = ';
testPicture($str1);
echo '$str2 = ';
testPicture($str2);
echo '$str3 = ';
testPicture($str3);
echo '$str4 = ';
testPicture($str4);