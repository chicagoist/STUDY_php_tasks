<?php

//Дана строка 'минск'. Сделайте из нее строку 'МИНСК'. 

$str = "минск";
$str_upper = mb_strtoupper($str);

print_r($str_upper);


//функцией strtoupper мы не можем воспользоваться, 
//так как она некорректно работает с русскими буквами. 
//Воспользуемся функцией mb_strtoupper