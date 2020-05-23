<?php

/* 
 Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. 
 Проверьте работу скрипта при $a, равном 3 и null. 
 */

function myTESTvar($param) {
    
    if( isset($param) ) {
        
        echo 'Верно!<br />';
    } else {
    
        echo 'Неверно!<br />';
    }
    
}

$a = 3;
$b = null;


echo "Верно ли что ";
var_dump($a);
echo " = существует? ";
myTESTvar($a) . '<br />';

echo "Верно ли что ";
var_dump($b);
echo " = существует? ";
myTESTvar($b) . '<br />';