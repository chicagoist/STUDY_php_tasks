<?php

/* 
В переменной $date лежит дата в формате '2013-12-31'. 
Преобразуйте эту дату в формат '31.12.2013'. 
 */

function myChangeDate( string $str ) : string {
    
    $arr = explode('-', $str);
    return $arr[2] . '.' . $arr[1] . '.' . $arr[0];
    
}

$date = '2013-12-31';

echo myChangeDate($date);