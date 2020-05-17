<?php

/*
  Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да',
 * если не так - 'нет'. 
 */

function myHTTP(string $str) {

    if (strpos($str, 'http://') === 0) {

        print_r("да");
        echo '<br /><br />';
    } else {

        print_r("нет");
        echo '<br /><br />';
    }
}

$str1 = "https://google.com";
$str2 = "http://google.com";

echo "Первая строка: http есть? ";
myHTTP($str1);

echo "Вторая строка: http есть?  ";
myHTTP($str2);
