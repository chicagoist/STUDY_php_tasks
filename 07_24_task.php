<?php

/* 
 Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела. 
 */

function mySecondSpace( string $str ) {
    
    $space = strpos($str, ' ');
    echo strpos($str, ' ', $space+1);
    
}


(string)$str = 'aaa aaa aaa aaa aaa';

mySecondSpace($str);
echo '<br /><br />';
