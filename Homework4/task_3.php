<?php

function searchItems(string $searchItem, array $box): bool
{
    foreach ($box as $item) {
        if (is_array($item)) {
            $result = searchItems($searchItem, $item);
            if ($result != null) {
                return true;
            }
        }
        elseif ($item == $searchItem) {
            return true;
        }
    }
    return false;
}

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',

        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];
$searchItem = "Ключ";

$search = searchItems($searchItem, $box);

var_dump($search);