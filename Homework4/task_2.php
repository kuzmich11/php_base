<?php
function result(array $arr): array
{
    return [
        "max" => max($arr),
        "min" => min($arr),
        "avg" => array_sum($arr)/count($arr)
    ];
}

print_r(result(range(1,10)));
