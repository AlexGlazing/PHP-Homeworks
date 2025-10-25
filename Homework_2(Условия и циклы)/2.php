<?php
do {
    $years = readline("Введите ваш возраст от 0 до 100 ");
    echo "$years\n";
    if ($years < 0 || $years > 100)
        echo "\033[31mError!!!\033[0m\n";
} while ($years > 0 && $years <= 100);