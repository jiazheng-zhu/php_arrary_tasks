<?php

$a = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

function columns($arr) {
    if (count($arr) == 0)
        return array();
    else if (count($arr) == 1)
        return array_chunk($arr[0], 1);

    array_unshift($arr, NULL);

    $transpose = call_user_func_array('array_map', $arr);
    return array_map('array_filter', $transpose);
}

function beadsort($arr) {
    foreach ($arr as $e)
        $poles []= array_fill(0, $e, 1);
    return array_map('count', columns(columns($poles)));
}

print_r(beadsort($a));