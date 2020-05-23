<?php

/*
  Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно',
 * иначе выведите 'Неверно'. Проверьте работу скрипта при $a, 
 * равном 5, 0, -3, 2. 
 */

function myTESTvar($param) {

    if ($param > 0 and $param < 5) {

        echo 'Верно!<br />';
    } else {

        echo 'Неверно!<br />';
    }
}

$a = 5;
$b = 0;
$c = -3;
$d = 2;

echo "Верно ли что ";
var_dump($a);
echo " = больше нуля и меньше пяти?";
myTESTvar($a) . '<br />';

echo "Верно ли что ";
var_dump($b);
echo " = больше нуля и меньше пяти?";
myTESTvar($b) . '<br />';

echo "Верно ли что ";
var_dump($c);
echo " = больше нуля и меньше пяти?";
myTESTvar($c) . '<br />';

echo "Верно ли что ";
var_dump($d);
echo " = больше нуля и меньше пяти?";
myTESTvar($d) . '<br />';
