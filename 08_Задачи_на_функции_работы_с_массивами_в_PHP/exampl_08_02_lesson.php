<?php

/*
  Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. С помощью функции array_map
 * сделайте из него массив 'A', 'B', 'C', 'D', 'E'. 
 */

function myArrayWithMAP(array $param): array {

    return array_map('ucfirst', $param);
}

$arr = ['a', 'b', 'c', 'd', 'e'];

echo'<pre>';
print_r($arr);
echo '</pre><br />';

echo'<pre>';
print_r(myArrayWithMAP($arr));
echo '</pre><br />';
