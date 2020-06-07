<?php

/*
  Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный
 * элемент данного массива. 
 */

function myRandKeyRandElement(array $param) {

    echo'<pre>';
    print_r($param);
    echo '</pre><br /><br />';

    $a = array_rand($param);
    echo 'Случайный ключ = ' . $a . '<br />';
    echo 'Соответствующее значение этого ключа =  ' . $param[$a] . '<br />';
}

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

myRandKeyRandElement($arr);
