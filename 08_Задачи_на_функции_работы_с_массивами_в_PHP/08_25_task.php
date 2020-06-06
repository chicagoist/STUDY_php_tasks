<?php

/*
  Дан массив '3'=>'a', '1'=>'c', '2'=>'d', '4'=>'b'. Попробуйте на нем
 * различные типы сортировок. 
 * 
 * sort - по возрастанию элементов, rsort - по убыванию элементов, 
 * asort - по возрастанию элементов с сохранением ключей, arsort - по убыванию 
 * элементов с сохранением ключей, ksort - по возрастанию ключей, krsort - 
 * по убыванию ключей, usort - по функции по элементам, uasort - по функции 
 * по элементам с сохранением ключей, uksort - по функции по ключам, natsort - 
 * натуральная сортировка. 
 */


function myCyrillicKeys( $param) {

    if($param == 'a'){
        
        return ['3'=>'а', '1'=>'б', '2'=>'в', '4'=>'г'];
    }
}



$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo'<pre>';
print_r($arr);
echo '</pre><br /><br />';


echo 'sort - по возрастанию элементов<br /><pre>';
sort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'rsort - по убыванию элементов<br /><pre>';
rsort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'asort - по возрастанию элементов с сохранением ключей<br /><pre>';
asort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'arsort - по убыванию элементов с сохранением ключей<br /><pre>';
arsort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'ksort - по возрастанию ключей<br /><pre>';
ksort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'krsort - по убыванию ключей<br /><pre>';
krsort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'usort - по функции по элементам<br /><pre>';
print_r(myCyrillicKeys(usort($arr, "myCyrillicKeys")));
echo '</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];

echo 'natsort - натуральная сортировка<br /><pre>';
natsort($arr);
print_r($arr);
echo'</pre>';
$arr = ['3' => 'a', '1' => 'c', '2' => 'd', '4' => 'b'];


