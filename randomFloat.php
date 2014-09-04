<?php

// generates random float numbet in range 0 ... 1

function randomFloat($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

//outputs random float value and rounds it by 1 decimal place HALF_UP

echo round(randomFloat(), 1);

?> 