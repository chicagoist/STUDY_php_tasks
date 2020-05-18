<?php

/* 
 Решим немного другую задачу: дан массив с элементами 'Привет, ', 'мир' и '!'. 
 * Необходимо записать в переменную $text фразу 'Привет, мир!', а затем вывести 
 * на экран содержимое этой переменной. 
 */

function myArrayToString(array $param ): string {
    
    $text = implode($param);
    return $text;
    
}

$arr = ['Привет, ', 'мир', '!'];

echo myArrayToString($arr);
