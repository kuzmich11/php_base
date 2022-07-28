<?php

while (True) {
    $count = (int)readline("Введите любое целое положительное число: ");
    if ($count > 0) {
        $number = $count % 8;
        switch ($number) {
            case 1:
                echo "Число $count соответствует 1 пальцу";
                break;
            case 2:
            case 0:
                echo "Число $count соответствует 2 пальцу";
                break;
            case 3:
            case 7:
                echo "Число $count соответствует 3 пальцу";
                break;
            case 4:
            case 6:
                echo "Число $count соответствует 4 пальцу";
                break;
            case 5:
                echo "Число $count соответствует 5 пальцу";
        }
        break;
    }
    else {
        echo "Вы ввели не верное число, давайте повторим\n";
    }
}
