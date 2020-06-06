<?php

/*
  Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи
 * из этого массива, а в $values – значения. 
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

$keys = array_keys($arr);
$values = array_values($arr);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

echo'$keys<pre>';
print_r($keys);
echo '</pre><br /><br />';

echo'$values<pre>';
print_r($values);
echo '</pre><br /><br />';
