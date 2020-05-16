<?php

/*
  Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.
 */

function myEachThreeInNumbers(array $arr) {

    foreach ($arr as $key => $value) {

        $str = (string) $value;
        for ($i = 0; $i < strlen($str); $i++) {

            if ($str[$i] == 3) {

                print_r($arr[$key]);
                echo '<br />';
                break;
            }
        }
    }
}

$array1 = ['56', '34', '5', '31', '132','33', '433'];

echo '<pre>';
print_r($array1);
echo '</pre>';
echo '<br /><br />';

myEachThreeInNumbers($array1);


