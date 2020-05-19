<?php

/* 
В переменной $min лежит число от 0 до 59. Определите в какую четверть 
 * часа попадает это число (в первую, вторую, третью или четвертую). 
 */


function myQuartOfHours( int $param ) {
    
    if($param >= 0 &&  $param <= 14) {
        
        echo "Первая четверть часа, если $param минута.";
    }
    
    if($param >= 15 &&  $param <= 29) {
        
        echo "Вторая четверть часа, если $param минута.";
    }
    
    if($param >= 30 &&  $param <= 44) {
        
        echo "Третья четверть часа, если $param минута.";
    }
    if($param >= 45 &&  $param <= 59) {
        
        echo "Четвёртая четверть часа, если $param минута.";
    }
    
    
    
}

$min = mt_rand(0, 59);

myQuartOfHours($min);