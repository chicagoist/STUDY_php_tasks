<?php

/* 
Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'. 
 */

function myTESTvar($param) {
    
    if( !(isset($param)) ) {
        
        echo 'Верно!<br />';
    } else {
    
        echo 'Неверно!<br />';
    }
    
}

$a = 3;
$b = null;


echo "Верно ли что ";
var_dump($a);
echo " = не существует? ";
myTESTvar($a) . '<br />';

echo "Верно ли что ";
var_dump($b);
echo " = не существует? ";
myTESTvar($b) . '<br />';