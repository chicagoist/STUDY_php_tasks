<?php

/* 
 Дан массив с числами. Проверьте, что в нем есть элемент со значением 3. 
 */

$arr = [];

for ($i = 1; $i < rand(5, 50); $i++) {

    $arr[] = $i;
}

echo'<pre>';
    print_r($arr);
    echo '</pre><br /><br />';

    var_dump(in_array(3, $arr));