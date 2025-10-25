<?php

do {
    $count = (int)readline("Сколько сторон у треугольника?");
    switch($count){
    case 3:
        echo "Ты прав! Поздравляю!\n";
        break;
    default:
        echo "Попробуй подумать по-лучше!\n";
        
}
} while ($count !=  3);

