<?php

class Papel
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro) {
        return $otro->teCompitePapel($this);
    }

    public function teCompiteTijera($otro) {
        return "Gana " . $otro->getNombreJugador();
    }

    public function teCompitePiedra($otro) {
        return "Gana " . $this->nombreJugador;
    }

    public function teCompitePapel($otro) {
        return "Empate";
    }

    public function getNombreJugador() {
        return $this->nombreJugador;
    }
}