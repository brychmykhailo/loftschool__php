<?php

function task1(array $array, bool $toString = false)
{
    if (true == $toString) {
        return implode($array);
    } else {
        foreach ($array as $string) {
            echo '<p>' . $string . '</p>';
        }
    }
}

function task2(string $operation, ... $args)
{
    $args = func_get_args();

    switch (true) {

        case (('*' === $operation) && count($args) > 2):
            $result = 1;
            for ($i = 1; $i < count($args); $i++) {
                if (!is_numeric($args[$i])) {
                    echo 'Ошибка. Проверте введенные аргументы!';
                    die();
                } else {
                    $result *= $args[$i];
                }
            }
            // результат arg1*arg2...
            unset($args[0]);
            echo implode(" * ", $args) . ' = ' . $result;
            break;

        case (('/' === $operation) && count($args) > 2):
            if (!is_numeric($args[1])) {
                echo 'Ошибка. Проверте введенные аргументы!';
                die();
            } else {
                $result = $args[1];
            }
            for ($i = 2; $i < count($args); $i++) {
                if (!is_numeric($args[$i]) || 0 == $args[$i]) {
                    echo 'Ошибка. Проверте введенные аргументы!';
                    die();
                } else {
                    $result /= $args[$i];
                }
            }
            // результат arg1/arg2...
            unset($args[0]);
            echo implode(" / ", $args) . ' = ' . $result;
            break;

        case (('+' === $operation) && count($args) > 2):
            $result = 0;
            for ($i = 1; $i < count($args); $i++) {
                if (!is_numeric($args[$i])) {
                    echo 'Ошибка. Проверте введенные аргументы!';
                    die();
                } else {
                    $result += $args[$i];
                }
            }
            // результат arg1+arg2...
            unset($args[0]);
            echo implode(" + ", $args) . ' = ' . $result;
            break;

        case (('-' === $operation) && count($args) > 2):
            if (!is_numeric($args[1])) {
                echo 'Ошибка. Проверте введенные аргументы!';
                die();
            } else {
                $result = $args[1];
            }
            for ($i = 2; $i < count($args); $i++) {
                if (!is_numeric($args[$i])) {
                    echo 'Ошибка. Проверте введенные аргументы!';
                    die();
                } else {
                    $result -= $args[$i];
                }
            }
            // результат arg1-arg2...
            unset($args[0]);
            echo implode(" - ", $args) . ' = ' . $result;
            break;

        default:
            echo 'Что то пошло не так';
    }
}

function task3($rows, $cols) {

    if ( is_numeric($cols) && is_numeric($rows) && ($cols >=1) && ($rows >= 1)) {
        echo '<table>';
        for ($i=1; $i <= $cols; $i++) {
            echo '<tr style="height:40px;">';
            for ($j=1; $j <= $rows; $j++) {
                echo '<td style="width:40px;text-align:center;">';
                echo $j * $i;
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Проверте введенные данные';
    }
}

function task4() {

    //Текущая дата в формате 31.12.2016 23:59
    echo date("m.d.y H:i" );
    echo '</br>';

}

function task5() {

    //Unixtime время соответствующее 24.02.2016 00:00:00
    echo strtotime('24.02.2016 00:00:00');
}

function task6() {

    //Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
    $string1 = 'Карл у Клары украл Кораллы';
    $string1New = str_replace('К', '', $string1);
    echo $string1New;
    echo '<br>';

}

function task7() {

    //Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.
    $string2 = 'Две бутылки лимонада';
    $string2New = str_replace('Две', 'Три', $string2);
    echo $string2New;

}

function task8() {

    //Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
    file_put_contents('test.txt', 'Hello again!');
}

function task9( string $filename) {

    //Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
    $data = file_get_contents($filename);

    if ($data) {
        echo $data;
    } else {
        echo 'Что то пошло не так';
    }
}
