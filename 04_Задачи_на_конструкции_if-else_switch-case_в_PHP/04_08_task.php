<?php

/* 
 Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', 
 * иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3. 
 */

function myTESTvar($param) {
    
    if( $param === '1') {
        
        echo 'Верно!<br />';
    } else {
    
        echo 'Неверно!<br />';
    }
    
}

$a = '1';
$b = 1;
$c = 3;


echo "Верно ли что ";
var_dump($a);
echo " === '1' ? ";
myTESTvar($a) . '<br />';

echo "Верно ли что ";
var_dump($b);
echo " === '1' ? ";
myTESTvar($b) . '<br />';

echo "Верно ли что ";
var_dump($c);
echo " === '1' ? ";
myTESTvar($c) . '<br />';