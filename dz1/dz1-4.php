<?php

// ДЗ-1 Задание #4

$day = 7;

switch (true) {
    case ($day >=1 && $day <=5):
        echo "Это рабочий день";
        break;
    case ($day == 6 || $day == 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}