<?php

/* 
 Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
 */

function myDeleteSlash( string $param ): string {
    
    return trim($param, '/');
    
}


$str = '/php/';

echo myDeleteSlash($str);

