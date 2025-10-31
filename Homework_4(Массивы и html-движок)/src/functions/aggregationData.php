<?php
$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
function aggregationData(array $array): array{
    return $newArray = ["max" => max($array), "min" => min($array), "avg" => array_sum($array) / count($array)];
}