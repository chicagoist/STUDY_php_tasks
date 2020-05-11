<?php

/* 
 Дан массив с элементами 'html', 'css', 'php'. 
 С помощью функции implode создайте строку из этих элементов,
 разделенных запятыми. 
 */

function myArrayToString(array $array ) : string {
    
    return implode(',', $array);
    
}

$array = ['html', 'css', 'php'];

echo myArrayToString($array);



