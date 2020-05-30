<?php

/*
  Найдите квадратный корень из 587. Округлите результат в большую и
  меньшую сторону, запишите результаты округления в ассоциативный массив с
  ключами 'floor' и 'ceil'.
 */

function myArrayOfFloorAndCeil(int $param): array {

    $arr = ['floor' => [], 'ceil' => []];

    $srt = sqrt($param);

    $arr['floor'][] = floor($srt);
    $arr['ceil'][] = ceil($srt);

    echo 'floor = ';
    echo floor($srt);
    echo '<br /><br />';

    echo 'ceil = ';
    echo ceil($srt);
    echo '<br /><br />';

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

$int = 587;

myArrayOfFloorAndCeil($int);


