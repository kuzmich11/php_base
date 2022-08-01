<?php

$arr1 = range(1,10);
$arr2 = range(10, 1);

for ($i = 0; $i < count($arr1); $i++) {
    $sum = $arr1[$i] * $arr2[$i];
    print_r("$sum\n");
}