<?php

/*
  Для решения задач данного блока вам понадобятся следующие функции: round, ceil,
  floor.

  Найдите квадратный корень из 379. Результат округлите до целых, до десятых,
  до сотых.

 */

function myRandomRoundOfInteger($param) {

    $srt = sqrt($param);

    echo "Округление числа $srt";
    echo '<br /><br />С помощью round = ';
    echo round($srt);
    echo ' | ';
    echo round($srt, 1);
    echo ' | ';
    echo round($srt, 2);
    echo '<br />';

    echo '<br />С помощью ceil = ';
    echo ceil($srt);
    echo '<br />';

    echo '<br />С помощью floor = ';
    echo floor($srt);
    echo '<br /><br />';
}

$int = 379;

myRandomRoundOfInteger($int);
