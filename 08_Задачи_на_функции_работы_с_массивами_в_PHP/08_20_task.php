<?php

/* 
Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения. 
 */

$arr = ['a'=>1, 'b'=>2, 'c'=>3];

$arr_flip = array_flip($arr);

echo'<pre>';
print_r($arr);
print_r($arr_flip); 
echo '</pre><br /><br />';