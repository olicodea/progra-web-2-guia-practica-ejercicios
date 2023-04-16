<?php
/*
Ejercicio 5: Sumatoria
Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
*/

function sumatoria_a($array) {
    $suma = 0;
    for($i = 0; $i < sizeof($array); $i++) {
        $suma += $array[$i];
    }
    return $suma;
}

function sumatoria_b($array) {
    $suma = 0;
    foreach ($array as $clave => $valor) {
        $suma += $valor;
    }
    return $suma;
}

function sumatoria_c($array) {
    $suma = 0;
    $i = 0;
    while($i < sizeof($array)) {
        $suma += $array[$i];
        $i++;
    }
    return $suma;
}