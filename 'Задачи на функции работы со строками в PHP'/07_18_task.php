<?php

/* 
 Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. 
 Удалите из нее все цифры. То есть в нашем случае должна получится 
 строка 'abcbdefgh'. 
 */

function myReplaceNumbers(string $str ) {
    
    echo str_replace(['0','1','2','3','4','5','6','7','8','9'],'', $str);
    
}

$str = '1a2b3c4b5d6e7f8g9h0';

myReplaceNumbers($str);


