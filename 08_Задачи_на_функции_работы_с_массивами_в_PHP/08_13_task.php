<?php

/* 
Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice 
 * создайте из него массив $result с элементами 2, 3, 4. 

 */

$arr = [1, 2, 3, 4, 5];

$result = array_slice($arr, 1, 3);

echo'<pre>';
print_r($result);
echo '</pre><br /><br />';