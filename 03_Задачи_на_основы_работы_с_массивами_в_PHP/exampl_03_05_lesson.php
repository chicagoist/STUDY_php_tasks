<?php

/* 
  Создайте массив $arr с элементами 1, 2, 3, 4, 5 двумя различными способами. 
 */

$arr1 = [1, 2, 3, 4, 5];

$arr2[0] = 1;
$arr2[1] = 2;
$arr2[2] = 3;
$arr2[3] = 4;
$arr2[4] = 5;

$arr4[] = 1;
$arr4[] = 2;
$arr4[] = 3;
$arr4[] = 4;
$arr4[] = 5;

$arr3 = array (1, 2, 3, 4, 5);

echo '$arr1<br />';
print_r($arr1);
echo '<br /><br />';

echo '$arr2<br />';
print_r($arr2);
echo '<br /><br />';

echo '$arr3<br />';
print_r($arr3);
echo '<br /><br />';

echo '$arr4<br />';
print_r($arr4);
echo '<br /><br />';
