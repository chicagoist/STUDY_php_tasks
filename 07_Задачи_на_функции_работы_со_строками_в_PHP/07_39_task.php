<?php

/*
  Создайте строку из 6-ти случайных маленьких латинских букв так,
 * чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей 
 * строке могла быть любая латинская буква, а не ограниченный набор.
 */

function myRandString(): string {

    for ($i = 'a'; $i <= 'z'; $i++) {

        $str = $str . $i;

        if ($i == 'z') {
            
            print_r($str); 
            echo '<br /><br />';

            
            $str = str_shuffle($str);
            return substr($str, 0, 6);
            break;
        }
    }
}


echo myRandString();