<?php

/* 
 Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>. 
 */


$str = '<p>
		<span class="-task-"></span>
		Запишите в переменную <b>$str</b> случайную строку <b>$len</b> 
                длиной, 
		состоящую из маленьких букв латинского алфавита. 
		<i><span class="red">Подсказка:</span> воспользуйтесь циклом 
                for или while.</i>
	</p>';

echo "Оригинальная строка :" . '<br />';
echo htmlspecialchars($str) . '<br /><br />';

echo "Изменённая строка :" . '<br />';
echo htmlspecialchars(strip_tags($str, '<b>,<i>')) . '<br /><br />';

