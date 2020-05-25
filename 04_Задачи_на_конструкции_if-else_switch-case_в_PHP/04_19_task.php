<?php

/*
  Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
  Если она имеет значение '1', то в переменную $result запишем 'зима',
  если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.
 */

function myTESTvarSWITCH(): string {

    $num = mt_rand(1, 4);
    echo '$num = ' . $num . '<br /><br />';

    switch ($num) {
        case 1:
            return 'зима';
            break;

        case 2:
            return 'лето';
            break;

        case 3:
            return 'осень';
            break;

        case 4:
            return 'весна';
            break;

        default:
            break;
    }
}

$result = myTESTvarSWITCH();
echo $result;
