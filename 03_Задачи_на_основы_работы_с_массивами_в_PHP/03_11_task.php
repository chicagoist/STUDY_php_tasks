<?php

/*
  Создайте многомерный массив $arr. С его помощью выведите на
 * экран слова 'joomla', 'drupal', 'зеленый', 'красный'. 
 */

function myMultiArray(array $param) {

    foreach ($param as $key => $value) {
        foreach ($value as $key1 => $value1) {

            switch ($value[$key1]) {

                case 'joomla': echo "joomla" . '<br />';
                    break;
                case 'drupal': echo "drupal" . '<br />';
                    break;
                case 'зеленый': echo "зеленый" . '<br />';
                    break;
                case 'красный': echo "красный" . '<br />';
                    break;

                default: break;
            }
        }
    }
}

$arr = [
    'cms' => ['wordpress', 'joomla', 'drupal'],
    'colors' => ['red' => 'красный', 'green' => 'зеленый', 'blue' => 'голубой']
];


myMultiArray($arr);
