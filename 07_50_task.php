<?php

/*
Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких 
букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.

 */

function myRandLenString() {

    $str = '';
    $len = mt_rand(0, (122 - 97));
    echo "Длина строки будет $len" . '<br />';
    
    for($i = 1; $i <= $len; $i++){
        
        $str .= chr(mt_rand(97, 122));
    }
    
    print_r($str);
}


myRandLenString();