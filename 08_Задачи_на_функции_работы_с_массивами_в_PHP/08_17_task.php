<?php

/* 
Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него 
 * массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e']. 
 */

$arr = [1, 2, 3, 4, 5];

array_splice($arr, 1, 0,['a','b']);
array_splice($arr, 6, 0,['c']);
array_splice($arr, 8, 0, ['e']);


echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

$arr = ['a', 'b', 'c', 'd', 'e'];
	
	$result = array_splice($arr, 0, 3);
	var_dump($result);