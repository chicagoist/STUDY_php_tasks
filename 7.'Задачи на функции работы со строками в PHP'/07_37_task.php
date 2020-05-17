<?php

/* 
 	Проверьте, является ли слово палиндромом (одинаково читается во всех 
 * направлениях, примеры таких слов: madam, otto, kayak, nun, level). 
 */

function myPalidrom( string $param ): bool {
    
    if (strrev($param) == $param ){
        
        return true;
    } else {
    
        return false;
    }
    
}


$str1 = 'madam';
$str2 = 'otto';
$str3 = 'kayak';
$str4 = 'nun';
$str5 = 'string';

var_dump(myPalidrom($str1));
echo '<br /><br />';
var_dump(myPalidrom($str2));
echo '<br /><br />';
var_dump(myPalidrom($str3));
echo '<br /><br />';
var_dump(myPalidrom($str4));
echo '<br /><br />';

var_dump(myPalidrom($str5));
echo '<br /><br />';