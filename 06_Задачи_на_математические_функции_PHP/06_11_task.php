<?php

/*
  Даны переменные $a и $b. Найдите найдите модуль разности $a и $b.
 * Проверьте работу скрипта самостоятельно для различных $a и $b. 
 */

function myModulesIntegers($param1, $param2) {

    echo "Модуль разности $param1 = ";
    echo abs($param1) . '<br />';

    echo "Модуль разности $param2 = ";
    echo abs($param2) . '<br />';
}

$a = mt_rand(-10, 10);
$b = mt_rand(-20, 20);


myModulesIntegers($a, $b);
