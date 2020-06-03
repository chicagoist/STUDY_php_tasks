<?php

/*
  Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.
 */


$arr = [1, 2, 3, 4, 5];

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

echo array_sum($arr);