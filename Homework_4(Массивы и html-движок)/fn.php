<?php

$foo = fn($x, $y) => $x + $y;



$add = function ($x = 0, $y = 0)
{
    return $x + $y;
};

function calc(callable $fn)
{
    return $fn();
}

echo calc($add);