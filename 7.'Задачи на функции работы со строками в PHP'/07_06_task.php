<?php

/* 
Дана строка 'LONDON'. Сделайте из нее строку 'London'. 
 */

$str = 'LONDON';

$str_UpFirst = ucfirst(strtolower($str));

print_r($str_UpFirst);