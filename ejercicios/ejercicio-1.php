<?php
/*
    CONSIGNA
    -----------------
    Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”, “amarillo”,”verde”).
    Dicha función devolverá el estado que corresponde: “frene”, “precaución”, “avance” o “estado desconocido” ante un caso no esperado.
    a) función semaforo_a($color): Resuelva la solución utilizando if else
    b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
    c) función semaforo_c($color): Resuelva la solución utilizando switch
 */

function semaforo_a($color) {
    if($color == "rojo") {
        return "frene";
    } else if ($color == "amarillo") {
        return "precaución";
    } else if ($color == "verde") {
        return "avance";
    } else {
        return "estado desconocido";
    }
}

function semaforo_b($color) {
    return $color == "rojo" ? "frene"
        : ($color == "amarillo" ? "precaución"
            : ($color == "verde" ? "avance"
                : "estado desconocido"));
}

function semaforo_c($color) {
    switch ($color) {
        case "rojo":
            return "frene";
        case "amarillo":
            return "precaución";
        case "verde":
            return "avance";
        default:
            return "estado desconocido";
    }
}