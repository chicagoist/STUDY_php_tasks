<?php

/*
  Если переменная $a НЕ не пустая, то выведите 'Верно', иначе выведите 'Неверно'.
 */

function myTESTvar($param) {

    if (!(empty($param))) {

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
echo " = не пустая ? ";
myTESTvar($a) . '<br />';

echo "Верно ли что ";
var_dump($b);
echo " = не пустая ? ";
myTESTvar($b) . '<br />';

echo "Верно ли что ";
var_dump($c);
echo " = не пустая ? ";
myTESTvar($c) . '<br />';

echo "Верно ли что ";
var_dump($d);
echo " = не пустая ? ";
myTESTvar($d) . '<br />';

echo "Верно ли что ";
var_dump($e);
echo " = не пустая ? ";
myTESTvar($e) . '<br />';

echo "Верно ли что ";
var_dump($f);
echo " = не пустая ? ";
myTESTvar($f) . '<br />';

echo "Верно ли что ";
var_dump($g);
echo " = не пустая ? ";
myTESTvar($g) . '<br />';

echo "Верно ли что ";
var_dump($h);
echo " = не пустая ? ";
myTESTvar($h) . '<br />';
