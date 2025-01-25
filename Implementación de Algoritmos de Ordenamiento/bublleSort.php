<?php
function bubbleSortDescending($list) {
    $n = count($list);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($list[$j] < $list[$j + 1]) { // Cambiar a '<' para descendente
                // Intercambiar
                $temp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $temp;
            }
        }
    }
    return $list;
}

// Lista de ejemplo
$list = [3, -5, 7, 2, 8, -1, 3, 0];
echo "Lista original: " . implode(", ", $list) . "\n";

$sortedList = bubbleSortDescending($list);
echo "Lista ordenada (descendente): " . implode(", ", $sortedList) . "\n";
?>
