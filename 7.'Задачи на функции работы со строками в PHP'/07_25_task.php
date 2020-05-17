<?php

/*
  Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть',
  если не так - 'нет'..
 */

function myDopelPunckt(string $str) {

    $dot = strpos($str, '.');
    $dot_last = strrpos($str, '.', $dot + 1);


    if (strpos($str, '.', $dot + 1) == ( $dot + 1 )) {

        print_r("есть");
        echo '<br /><br />';
    } elseif (strpos($str, '.', $dot_last + 1) == ( $dot_last + 1 )) {

        print_r("есть");
        echo '<br /><br />';
    } else {

        print_r("нет");
        echo '<br /><br />';
    }
}

function myDopelPunckt2(string $str) { // работает корректней
    $x = false;

    for ($i = 0; $i < mb_strlen($str); $i++) {


        if ($str[$i] == '.' && $str[$i + 1] == '.') {

            $x = true;
        }
    }
    if ($x == true) {

        print_r("есть");
        echo '<br /><br />';
    } else {

        print_r("нет");
        echo '<br /><br />';
    }
}

//$str = "Check that there are two points. .. in a row in a row. If so, 
//print 'is', if not - print 'no'.";
$str = "Проверьте, что в строке есть две точки подряд. .. Если это так - "
        . "выведите 'есть', если не так - 'нет'. ";

myDopelPunckt($str);
myDopelPunckt2($str);
