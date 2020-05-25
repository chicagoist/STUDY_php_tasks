<?php

/*
  В переменной $day лежит какое-то число из интервала от 1 до 31.
  Определите в какую декаду месяца попадает это число (в первую, вторую или
  третью).
 */

function myMotnthDekads(): string {

    $day = mt_rand(1, 31);
    echo '$day = ' . $day . '<br /><br />';

    switch ($day) {
        case ($day >= 1 && $day <= 10):
            return 'первая декада';
            break;

        case ($day >= 11 && $day <= 20):
            return 'вторая декада';
            break;

        case ($day >= 21 && $day <= 31):
            return 'третья декада';
            break;


        default:
            break;
    }
}

$result = myMotnthDekads();
echo $result;
