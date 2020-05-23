<?php

/* 
Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. 
 * Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'. 
 */

function myTESTvar($param) {
    
    if( empty($param) ) {
        
        echo 'Верно!<br />';
    } else {
    
        echo 'Неверно!<br />';
    }
    
}

$a = 1;
$b = 3;
$c = -3;
$d = 0;
$e = null;
$f = true;
$g = '';
$h = '0';


echo "Верно ли что ";
var_dump($a);
echo " = пустая ? ";
myTESTvar($a) . '<br />';

echo "Верно ли что ";
var_dump($b);
echo " = пустая ? ";
myTESTvar($b) . '<br />';

echo "Верно ли что ";
var_dump($c);
echo " = пустая ? ";
myTESTvar($c) . '<br />';

echo "Верно ли что ";
var_dump($d);
echo " = пустая ? ";
myTESTvar($d) . '<br />';

echo "Верно ли что ";
var_dump($e);
echo " = пустая ? ";
myTESTvar($e) . '<br />';

echo "Верно ли что ";
var_dump($f);
echo " = пустая ? ";
myTESTvar($f) . '<br />';

echo "Верно ли что ";
var_dump($g);
echo " = пустая ? ";
myTESTvar($g) . '<br />';

echo "Верно ли что ";
var_dump($h);
echo " = пустая ? ";
myTESTvar($h) . '<br />';