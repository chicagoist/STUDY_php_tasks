<?php

/*
  Дан массив $arr. Перемешайте его элементы в случайном порядке.
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

shuffle($arr);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';
