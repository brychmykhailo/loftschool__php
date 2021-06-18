<?php

// ДЗ-1 Задание #6

echo '<table>';
for ($i=1; $i <= 10; $i++) {
    echo '<tr style="height:40px;">';
        for ($j=1; $j <= 10; $j++) {
            echo '<td style="width:40px;text-align:center;">';
                if (($i % 2) && ($j % 2)){
                    echo '[' . $j*$i . ']';
                } elseif (!($i % 2) && !($j % 2)) {
                    echo '(' . $j * $i . ')';
                } else {
                    echo $j * $i;
                }
            echo '</td>';
        }
    echo '</tr>';
}
echo '</table>';