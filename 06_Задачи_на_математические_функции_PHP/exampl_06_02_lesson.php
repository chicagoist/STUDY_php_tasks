<?php

/*
  Задача. Заполните массив 30-ю случайными числами от 1 до 10.
 */

function myArrayWithRandomElements(): array {

    for ($i = 0; $i <= 30; $i++) {

        $arr[$i] = mt_rand(1, 10);

        if ($i == 29) {

            return $arr;
        }
    }
}

echo '<pre>';
print_r(myArrayWithRandomElements());
echo '</pre>';
