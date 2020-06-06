<?php

/* 
 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice запишите в новый 
 * массив элементы [2, 3, 4]. 
 */

$arr = [1, 2, 3, 4, 5];

array_splice($arr, 0, 5, [2, 3, 4]);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';