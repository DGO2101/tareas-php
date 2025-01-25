<?php
function mergeSort($list) {
    if (count($list) <= 1) {
        return $list;
    }
    $middle = floor(count($list) / 2);
    $left = array_slice($list, 0, $middle);
    $right = array_slice($list, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}

// Lista de ejemplo
$list = ["banana", "apple", "orange", "grape", "pear"];
echo "Lista original: " . implode(", ", $list) . "\n";

$sortedList = mergeSort($list);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $sortedList) . "\n";
?>
