<?php

while (True) {
    $answer = (int)readline("В каком году произошло крещение Руси?\nВарианты ответа: 898, 988 или 998 год.\n");

    if ($answer == 988) {
        echo "Это правильный ответ!";
        break;
    }
    elseif (($answer == 898) or ($answer == 998)) {
        echo "Ответ не верный:(";
        break;
    }
    else {
        echo "Нет такого варианта, повторяю вопрос\n";
    }
}


