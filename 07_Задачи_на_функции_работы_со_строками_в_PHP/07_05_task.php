<?php

/* 
Дана строка 'london is the capital of great britain'. 
 * Сделайте из нее строку 'London Is The Capital Of Great Britain'. 
 */

$str = 'london is the capital of great britain';

$str_UpWords = ucwords($str);

print_r($str_UpWords);