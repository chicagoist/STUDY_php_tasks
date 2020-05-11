<?php

/* 
Дана строка. Вырежите и выведите на экран последние 3 символа этой строки. 
 */

$str = 'html css php..';

echo substr($str, strlen($str)-3);