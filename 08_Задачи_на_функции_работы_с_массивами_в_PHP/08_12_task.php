<?php

/*
  Даны два массива: первый с элементами 1, 2, 3, второй с
 * элементами 'a', 'b', 'c'. Сделайте из них массив с 
 * элементами 1, 2, 3, 'a', 'b', 'c'. 
 */

$arr = [1, 2, 3];
$arr_second = ['a', 'b', 'c'];

$arr_finish = array_merge($arr, $arr_second);

echo'<pre>';
print_r($arr_finish);
echo '</pre><br /><br />';
