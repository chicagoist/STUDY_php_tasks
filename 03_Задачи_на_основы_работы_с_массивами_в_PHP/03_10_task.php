<?php

/* 
 Пусть теперь номер дня недели хранится в переменной $day, например там 
 * лежит число 3. Выведите день недели, соответствующий значению 
 * переменной $day. 
 */

function myTodayDayOfWeek(array $param) {
    
    $date = date("N");

    foreach ($param as $key => $value) {

        if ( $key == $date ) {

            echo "Сегодня у нас $value. ";
        }
    }
}

$arr = [1 => 'Пн', 2 => 'Вт', 3 => 'Ср', 4 => 'Чт', 5 => 'Пт', 6 => 'Сб', 7 => 'Вс'];


myTodayDayOfWeek($arr);
