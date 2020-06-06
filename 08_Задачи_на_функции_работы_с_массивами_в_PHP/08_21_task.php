<?php

/* 
 Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с 
 * элементами 5, 4, 3, 2, 1. 
 */

$arr = [1, 2, 3, 4, 5];

$arr_reverse = array_reverse($arr);

echo'<pre>';
print_r($arr);
print_r($arr_reverse); 
echo '</pre><br /><br />';