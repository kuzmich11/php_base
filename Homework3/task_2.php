<?php

$name = readline("Как тебя овут? ");
$arr1 = ["огоромного","большого","крепкого", "бесконечного"];
$arr2 = ["богатства","здоровья","счастья"];

shuffle($arr1);
shuffle($arr2);

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю тебе $arr1[0] $arr2[0], $arr1[1] $arr2[1] и $arr1[2] $arr2[2]!";