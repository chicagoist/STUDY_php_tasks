<?php

/* 
 Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 
 5 штук и вместо нее вставьте '!!!'. 
 */

function mySubstr_Raplace( string $str ) {
    
    echo substr_replace($str, '!!!', 3, 5 ); // не работает с кириллицей
    
    
   
    
}

$str = "Given the string $ str. Cut from it a substring from the 3rd character
        (counting from scratch), 5 pieces and insert '!!!' instead.";

echo 'Эквивалент :<br />';
print_r($str);
echo '<br /><br />';

mySubstr_Raplace($str);

// hello