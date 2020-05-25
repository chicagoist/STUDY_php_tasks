<?php

/* 
 В переменной $month лежит какое-то число из интервала от 1 до 12. 
Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
 */

function myYearDekads(): string {

    $month = mt_rand(1, 12);
    echo '$day = ' . $month . '<br /><br />';

    switch ($month) {
        case ($month >= 1 && $month <= 2):
            return 'сейчас зима';
            break;

        case ($month >= 3 && $month <= 5):
            return 'сейчас весна';
            break;

        case ($month >= 6 && $month <= 8):
            return 'сейчас лето';
            break;
        
        case ($month >= 9 && $month <= 11):
            return 'сейчас осень';
            break;
        
        case ($month = 12 ):
            return 'сейчас зима';
            break;


        default:
            break;
    }
}

$result = myYearDekads();
echo $result;