<?php
include_once "../../ejercicios/ejercicio 18/FinPartida.php";
class Partida
{
    public function __construct()
    {
    }

    /**
     * @throws FinPartida
     */
    public function mostrarPuntaje($packman) {
        if($packman->getVidas() <= 0)
            throw new FinPartida($packman->getPuntaje());

        echo "Partida: Puntaje: " . $packman->getPuntaje() . " - Vidas: " . $packman->getVidas() . "<br>";
    }
}