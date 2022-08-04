<?php

$students = [
    'БАП1320' => [ // В качестве ключей будут названия групп
        'Смирнова Христина Потаповна' => 3,
        'Рогозин Даниил Арсениевич' => 5,
        'Золин Владилен Леонтиевич' => 2,
        'Архаткина Владислава Никитевна' => 4,
        'Мещерякова Мария Елизаровна' => 3,
        'Саврасова Фаина Ивановна' => 5,
        'Хромченко Зинаида Николаевна' => 2,
        'Протасова Майя Леонидовна' => 4,
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович' => 5,
        'Белорусов Ефрем Изяславович' => 2,
        'Ягода Назар Прохорович' => 3,
        'Ярилова Розалия Серафимовна' => 5,
        'Нырко Платон Вадимович' => 4,
        'Калинин Агап Моисеевич' => 4,
        'Никифоров Юлиан Прокофиевич' => 4,
    ]
];
$lst = "";
$progress = [];
$max = null;
$max_key = null;

foreach ($students as $key => $value){
    $sum = 0;
    $x = "";
    foreach ($value as $student => $grade){
        $sum += $grade;
        if ($grade < 3) {
        $x .= "- $student\n";//Список студентов на отчисление в группе
        }
    }
    $lst .= "Группа $key\n$x";//Список студентов по группам
    $sum /= count($value);//Средняя оценка группы
    $progress[$key] = $sum;
}
foreach ($progress as $key => $value){
    if ($value > $max) {
        $max = $value;
        $max_key = $key;
    }
}

print_r("Наибольший средний балл у группы $max_key - $max\n");
print_r( "Список студентов на отчисление: 
$lst\n");