<?php

/* 
 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте 
 * массив в [1, 4, 5]. 
 */

$arr = [1, 2, 3, 4, 5];

array_splice($arr, 1, 2);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';