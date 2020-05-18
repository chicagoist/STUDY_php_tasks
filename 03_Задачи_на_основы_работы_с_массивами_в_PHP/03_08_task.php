<?php

/*
  Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
 */

function myDisplayOfPetroAndNikolay(array $param) {

    foreach ($param as $key => $value) {

        if ($key == 'Петя' || $key == 'Коля') {

            echo "Зарплата у $key = " . $value . '<br />';
        }
    }
}

$arr = ['Петя' => 200, 'Коля' => 50, 'Сергей' => 500, 'Иван' => 150];

myDisplayOfPetroAndNikolay($arr);
