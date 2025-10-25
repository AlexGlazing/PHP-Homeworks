<?php
$n = 3;
switch ($n) {
    case ($n>=10):
        for ($i=$n; $i <= 15 ; $i++) {
            echo "$i\n";
        }
        break;

    case ($n<=10):
        for ($i=$n; $i <= 15 ; $i++) {
            echo "$i\n";
        }
        break;   
        
    default:
        echo "Default использовать обязательно!";
        break;
}