<?php

/*
  Решите эти задачи сначала через цикл while, а затем через цикл for.

  С помощью цикла найдите сумму чисел от 1 до 100.
 */

echo 'Первый вариант через while<br /><br />';

$i = 1;
$a = 0;
$result = 0;

while ($i <= 100) {

    $result += $i;
    $a++;

    if ($a == 100) {

        echo $result . '<br />';
    }

    $i++;
}


echo '<br /><br />';


echo 'Второй вариант через for<br /><br />';

$b = 0;
$result2 = 0;

for ($i = 1; $i <= 1000; $i++) {


    $result2 += $i;
    $b++;

    if ($b == 100) {

        echo $result2 . '<br />';
    }
}