<?php

/*
  Дана строка. Перемешайте символы этой строки в случайном порядке.
 */

function myStrShuffle(string $param): string {

    $count = 0;

    for ($i = 0;; $i++) {

        $count++;

        if (str_shuffle($param) == $param) {

            echo "Совпало на счётчике $count " . '<br /><br />';
            break;
        }
    }
}

$str = 'abcdefg';

echo "Задана строка {$str}" . '<br />' . "Изменена на: " . '<br />';
echo str_shuffle($str);
echo '<br /><br />';

myStrShuffle($str);
