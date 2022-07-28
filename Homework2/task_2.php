<?php

$name = readline("Введите Ваше имя: ");
$countTask = (int)readline("Сколько задач на сегодня запланировано? ");
$totalTime = 0;
$tasks = "";

for ($i = 1; $i <= $countTask; $i++) {
    $task = readline("Введите $i задачу на сегодня: ");
    $timing = (int)readline("Сколько времени она займет? ");
    $tasks .= "- $task ({$timing}ч)\n";
    $totalTime += $timing;
}


echo "Вас зовут $name, сегодня у вас запланировано $countTask приоритетных задачи на день:
{$tasks}Примерное время выполнения плана = {$totalTime}ч
";