<?php

class Piedra
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro) {
        return $otro->teCompitePiedra($this);
    }

    public function teCompiteTijera($otro) {
        return "Gana " . $this->nombreJugador;
    }

    public function teCompitePiedra($otro) {
        return "Empate";
    }

    public function teCompitePapel($otro) {
        return "Gana " . $otro->getNombreJugador();
    }

    public function getNombreJugador() {
        return $this->nombreJugador;
    }
}