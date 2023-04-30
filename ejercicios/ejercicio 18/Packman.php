<?php

class Packman
{
    private $puntaje;
    private $vidas;

    public function __construct($puntaje, $vidas) {
        $this->puntaje = $puntaje;
        $this->vidas = $vidas;
    }

    public function chocaContra($elemento) {
        $elemento->chocaContraPackman($this);
    }

    public function chocaContraFantasma() {
        $this->vidas--;
    }

    public function chocaContraFantasmaComestible() {
        $this->puntaje += 100;
    }

    public function chocaContraPildora() {
        $this->puntaje += 10;
    }

    public function getVidas() {
        return $this->vidas;
    }

    public function getPuntaje() {
        return $this->puntaje;
    }
}