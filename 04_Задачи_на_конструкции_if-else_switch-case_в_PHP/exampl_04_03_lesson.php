<?php

/*
  Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет
 * значение 'ru', то в переменную $arr запишем массив дней недели на русском 
 * языке, а если имеет значение 'en' – то на английском. Решите задачу через 
 * 2 if, через switch-case и через многомерный массив без ифов и switch. 
 */

function myIF_ELSE(): array {

    $a = mt_rand(0, 1);

    $lang = $a ? 'ru' : 'en';
    echo 'Function IF..ELSE<br /> ';

    echo '$lang = ' . $lang . '<br /><br />';

    if ($lang == 'ru') {

        return ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    }

    if ($lang == 'en') {

        return ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
    }
}

function mySWITCH(): array {

    $a = mt_rand(0, 1);

    $lang = $a ? 'ru' : 'en';
    echo 'Function SWITCH<br /> ';

    echo '$lang = ' . $lang . '<br /><br />';

    switch ($lang) {
        case 'en':
            return ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
            break;

        case 'ru':
            return ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
            break;

        default:
            break;
    }
}


function myARRAY(): array {

    $a = mt_rand(0, 1);

    $lang = $a ? 'ru' : 'en';
    echo 'Function ARRAY<br /> ';

    echo '$lang = ' . $lang . '<br /><br />';
    
    return $a ?  ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'] : 
        ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

}

//echo '<pre>';
//print_r(myIF_ELSE());
//echo '</pre><br /><br />';

//echo '<pre>';
//print_r(mySWITCH());
//echo '</pre><br /><br />';

echo '<pre>';
print_r(myARRAY());
echo '</pre><br /><br />';