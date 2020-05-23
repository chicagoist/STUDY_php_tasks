<?php

/* 
	Если переменная $var равна true, то выведите 'Верно', иначе 
 * выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. 
 * Напишите два варианта скрипта - с короткой записью и с длинной. 
 */

function myTESTvar($param) {
    
    if($param) {
        
        echo 'Верно!<br />';
    } else {
    
        echo 'Неверно!<br />';
    }
    
}

function myTESTvar2($param) {
    
echo $param ? 'Верно!<br />' : 'Неверно!<br />';
    
}

$a = false;
$b = true;


echo "1.Верно ли что ";
var_dump($a);
echo " = переменная true? ";
myTESTvar($a) . '<br />';

echo "1.Верно ли что ";
var_dump($b);
echo " = переменная true? ";
myTESTvar($b) . '<br />';

echo '<br /><br />';

echo "2.Верно ли что ";
var_dump($a);
echo " = переменная true? ";
myTESTvar2($a) . '<br />';

echo "2.Верно ли что ";
var_dump($b);
echo " = переменная true? ";
myTESTvar2($b) . '<br />';