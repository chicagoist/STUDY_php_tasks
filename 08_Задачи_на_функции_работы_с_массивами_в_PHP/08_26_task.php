<?php

/* 
 Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран 
 * случайный ключ из данного массива. 
 */

$arr = ['a'=>1, 'b'=>2, 'c'=>3];

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

echo 'array_rand = ';
print_r(array_rand($arr, 3));