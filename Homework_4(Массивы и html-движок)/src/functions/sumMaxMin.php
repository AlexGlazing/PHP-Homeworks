<?php


function sumMaxMin()  {
    $mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
    $max = $mas[0];
    $min = $mas[0];
    for ($i=0; $i < count($mas) ; $i++) { 
        if($max<$mas[$i]){
            $max = $mas[$i];
        }
        if($min>$mas[$i]){
            $min = $mas[$i];
        }
    }
    return $max + $min;
}