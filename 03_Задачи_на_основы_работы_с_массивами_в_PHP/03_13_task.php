<?php

/* 
 Пусть теперь в переменной $lang хранится язык (она принимает одно из 
 * значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - 
 * номер дня. Выведите словом день недели, соответствующий переменным 
 * $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то 
 * выведем 'среда'. 
 */

function myRandomCalendar(array $param) {
    
    $lang;
    
    if(mt_rand(0,1)){
        
        $lang = 'ru';
    }else {
        
        $lang = 'en';
    }
    
    $day = date("N");
    
    echo "Если \$lang = $lang и \$day = $day, тогда сегодня ";
    print_r($param[$lang][$day]);
    
                }

$arr = [
    
    'ru'=>[1=>'Пн',2=>'Вт',3=>'Ср',4=>'Чт',5=>'Пт',6=>'Сб',7=>'Вс'],
    'en'=>[1=>'Mon',2=>'Tue',3=>'Wed',4=>'Thu',5=>'Fri',6=>'Sat',7=>'Sun']
];

myRandomCalendar($arr);