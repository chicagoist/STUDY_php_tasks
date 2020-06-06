<?php

/* 
Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него 
массив [1, 2, 3, 'a', 'b', 'c', 4, 5]. 
 */

$arr = [1, 2, 3, 4, 5];

array_splice($arr, 3, -3, ['a', 'b', 'c']);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';