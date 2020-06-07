<?php

/*
  Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его
 * элементы в случайном порядке. 
 */

$arr = range(1, 25);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';

shuffle($arr);

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';
