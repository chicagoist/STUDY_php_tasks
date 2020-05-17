<?php

/* 
Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', 
 * слово 'css' и слово 'php'. 
 */

$str = 'html css php';

for ($i = 0; $i < strlen($str); $i++){
    
    if($str[$i] == 'h'){
       
        echo substr($str, $i, 4);
        echo '<br />';
        continue;
    }
    
    for ($i = 0; $i < strlen($str); $i++){
    
    if($str[$i] == 'c'){
       
        echo substr($str, $i, 3);
        echo '<br />';
        continue;
        
        }
    }
    
        for ($i = 0; $i < strlen($str); $i++){
    
        if($str[$i] == 'p'){
       
        echo substr($str, $i, 3);
        echo '<br />';
        exit;
        
        }
       
    }
}