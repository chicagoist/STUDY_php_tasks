<?php

/* 
 Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 
 * 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3.
 */

function myTESTvar($param) {
    
    if( $param === 'test') {
        
        echo 'Верно!<br />';
    } else {
    
        echo 'Неверно!<br />';
    }
    
}

$a = 'test';
$b = 'тест';
$c = 0;


echo "Верно ли что $a == 'test' ? ";
myTESTvar($a) . '<br />';

echo "Верно ли что $b == 'test' ? ";
myTESTvar($b) . '<br />';

echo "Верно ли что $c == 'test' ? ";
myTESTvar($c) . '<br />';