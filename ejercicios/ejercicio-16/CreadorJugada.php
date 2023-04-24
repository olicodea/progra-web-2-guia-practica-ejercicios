<?php
include_once "../ejercicios/ejercicio-16/Piedra.php";
include_once "../ejercicios/ejercicio-16/Papel.php";
include_once "../ejercicios/ejercicio-16/Tijera.php";
class CreadorJugada
{
    public static function crearJugada($figura, $jugador) {
        switch ($figura) {
            case "Papel":
                return new Papel($jugador);
            case "Piedra":
                return new Piedra($jugador);
            case "Tijera":
                return new Tijera($jugador);
        }
        return "";
    }
}