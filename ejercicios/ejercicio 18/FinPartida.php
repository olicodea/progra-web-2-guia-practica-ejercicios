<?php

class FinPartida extends Exception
{
    public function __construct($puntaje)
    {
        parent::__construct("Fin de la partida. Puntos obtenidos: " . $puntaje);
    }
}