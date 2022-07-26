<?php


$question1 = "Какая задача стоит перед вами сегодня? ";
$question2 = "Сколько примерно времени эта задача займет? ";
$name = readline("Введите Ваше имя: ");
$age = (int)readline("Введите Ваш возраст: ");
$task1 = readline($question1);
$timing1 = (float)readline($question2);
$task2 = readline($question1);
$timing2 = (float)readline($question2);
$task3 = readline($question1);
$timing3 = (float)readline($question2);


$time = $timing1 + $timing2 + $timing3;


echo "Вас зовут $name, Вам $age лет, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ($timing1 ч)
- $task2 ($timing2 ч)
- $task3 ($timing3 ч)
Примерное время выполнения плана = $time ч
";