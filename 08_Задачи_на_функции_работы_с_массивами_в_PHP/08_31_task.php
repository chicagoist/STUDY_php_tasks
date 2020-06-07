<?php

/*
  Сделайте строку длиной 6 символов, состоящую из маленьких английских
 * букв, расположенных в случайном порядке. Буквы не должны повторяться. 
 */

function myRandomStringOfSixElements(): string {

    $arr = range('a', 'z');
    shuffle($arr);
    
    $count = count($arr);
    $rand = mt_rand(0, ($count - 6));

    $arr_rand = array_slice($arr, $rand, 6);

    $str = implode('', $arr_rand);

    echo '$str = ' . $str . '<br />';
}

myRandomStringOfSixElements();
