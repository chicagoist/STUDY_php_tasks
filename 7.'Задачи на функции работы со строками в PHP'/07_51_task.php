<?php

/*
  Дана буква английского алфавита. Узнайте, она маленькая или большая.
 */

function myChekChr() {

    $array = [(mt_rand(65, 90)), (mt_rand(97, 122))];

    $ch = $array[mt_rand(0, 1)];


    if ($ch >= 65 && $ch <= 90) {

        echo "Код $ch соответствует большой букве = " . chr($ch) . '<br />';
    } elseif ($ch >= 97 && $ch <= 122) {

        echo "Код $ch соответствует маленькой букве = " . chr($ch) . '<br />';
    }
}

myChekChr();
