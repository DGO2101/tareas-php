<?
function generarFibonacci($n) {
    $fibonacci = [0, 1];
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return array_slice($fibonacci, 0, $n);
}


function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}


function esPalindromo($texto) {
    $texto = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $texto));
    return $texto === strrev($texto);
}
?>