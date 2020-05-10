<?php

/* 
Задача. В переменной $date лежит дата в формате '31-12-2030'. 
Преобразуйте эту дату в формат '2030.12.31'. 
 */

$date = '31-12-2030';

$date_array = explode('-', $date);

$date_change = $date_array[2] . '.' . $date_array[1] . '.' . $date_array[0];

echo '<pre>';
echo $date_change;
echo '</pre>';

