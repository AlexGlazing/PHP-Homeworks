<?php

function generationRandomArray(): array{
    $newArray = [];
    do {
        $random = mt_rand(1, 200);
        array_push($newArray, $random);
        array_unique($newArray);
    } 
    while (count($newArray) < 100);
    return $newArray;
}