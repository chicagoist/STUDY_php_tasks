<?php

/*
  Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого
 * элемента '-' и удалите его с помощью функции array_splice. 
 */

$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

$arr_search = array_search('-', $arr);

array_splice($arr, $arr_search, 1);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';
