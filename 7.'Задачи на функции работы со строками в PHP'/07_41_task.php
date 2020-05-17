<?php

/*
  Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно
  быть 9 рядов, а не 5.

  x
  xx
  xxx
  xxxx
  xxxxx

 */

function myRepeatString(int $param) {

    for ($i = 1; $i <= $param; $i++) {

        echo str_repeat('x', $i) . '<br />';
    }
}

myRepeatString(9);