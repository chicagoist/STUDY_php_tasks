<?php

/*
  Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом
 * 0 на '!', а элемент с ключом 3 - на '!!'. 
 */

$arr = ['a', 'b', 'c', 'd', 'e'];

$arr_replace = array_replace($arr, [0 => '!', 3 => '!!']);

echo'<pre>';
print_r($arr);
print_r($arr_replace);
echo '</pre><br /><br />';
