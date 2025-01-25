<?php
function insertionSort($list) {
    $n = count($list);
    for ($i = 1; $i < $n; $i++) {
        $key = $list[$i];
        $j = $i - 1;

        // Mover elementos que sean mayores al key
        while ($j >= 0 && $list[$j] > $key) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $key;
    }
    return $list;
}

// Lista de ejemplo
$list = ["Carlos", "Ana", "Pedro", "Luis", "Marta"];
echo "Lista original: " . implode(", ", $list) . "\n";

$sortedList = insertionSort($list);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $sortedList) . "\n";
?>
