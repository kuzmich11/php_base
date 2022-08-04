<?php
$func = function ($elem)
{
    $x = $elem % 2;
    if ($x == 0) {
        return "четное";
    } else {
        return "нечетное";
    }
};

print_r(array_map($func, range(1, 50, 7)));