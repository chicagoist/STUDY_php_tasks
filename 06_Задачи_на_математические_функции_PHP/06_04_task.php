<?php

/*
  Найдите квадратный корень из 245
 */

function mySQRT(int $param) {
    echo "Квадратный корень из $param = ";
    printf("%.2f", sqrt($param));
}

$int = 245;


mySQRT($int);
