<?php

/*
  Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой
 * переменной является цифра 1, 2 или 3. Если это так - выведите 'да', в противном 
 * случае выведите 'нет'. 
 */

function myFirstParamMyString(string $param) {

    if ($param[0] == 1 || $param[0] == 2 || $param[0] == 3) {

        echo 'да<br /><br />';
    } else {

        echo 'нет<br /><br />';
    }
}

$str1 = '12345';
$str2 = 12345;
$str3 = 'a3455';
$str4 = '3askjd';


echo "Проверьте, что первым символом переменной ";
var_dump($str1);
echo " является цифра 1, 2 или 3." . '<br />';
echo myFirstParamMyString($str1) . '<br />';

echo "Проверьте, что первым символом переменной ";
var_dump($str2);
echo " является цифра 1, 2 или 3." . '<br />';
echo myFirstParamMyString($str2) . '<br />';

echo "Проверьте, что первым символом переменной ";
var_dump($str3);
echo " является цифра 1, 2 или 3." . '<br />';
echo myFirstParamMyString($str3) . '<br />';

echo "Проверьте, что первым символом переменной ";
var_dump($str4);
echo " является цифра 1, 2 или 3." . '<br />';
echo myFirstParamMyString($str4) . '<br />';
