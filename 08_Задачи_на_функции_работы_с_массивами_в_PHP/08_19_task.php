<?php

/* 
Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью 
 * массив 'a'=>1, 'b'=>2, 'c'=>3'.
 */

$arr_a = ['a', 'b', 'c'];
$arr_b = [1, 2, 3];

$arr_combine = array_combine($arr_a, $arr_b);

echo'<pre>';
print_r($arr_a);
print_r($arr_b); 
echo '</pre><br /><br />';

echo'$arr_combine<pre>';
print_r($arr_combine);
echo '</pre><br /><br />';