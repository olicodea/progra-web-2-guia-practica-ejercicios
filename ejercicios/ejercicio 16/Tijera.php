<?php

class Tijera
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro) {
        return $otro->teCompiteTijera($this);
    }

    public function teCompiteTijera($otro) {
        return "Empate";
    }

    public function teCompitePiedra($otro) {
        return "Gana " . $otro->getNombreJugador();
    }

    public function teCompitePapel($otro) {
        return "Gana " . $this->nombreJugador;
    }

    public function getNombreJugador() {
        return $this->nombreJugador;
    }
}