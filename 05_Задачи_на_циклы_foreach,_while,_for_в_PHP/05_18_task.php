<?php

/*
  Дан массив $arr. С помощью цикла foreach запишите английские названия
 * в массив $en, а русские - в массив $ru. 
 */

$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];

$en = [];
$ru = [];
$a = 0;
$x = count($arr);

foreach ($arr as $key => $value) {

    $en[] = $key;
    $ru[] = $value;

    $arr2 = ['en' => [], 'ru' => []];
    $arr2['en'] = $en;
    $arr2['ru'] = $ru;

    $a++;

    if ($a == $x) {

        $arr = $arr2;
    }
}



echo '<pre>';
print_r($arr);
echo '</pre>';
