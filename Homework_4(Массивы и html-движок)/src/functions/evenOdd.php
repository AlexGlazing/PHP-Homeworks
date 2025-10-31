<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
function evenOdd($number)
{
    return ($number & 1) ? 'не четное' : 'четное';
}

