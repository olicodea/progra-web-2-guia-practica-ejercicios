<?php

class Operando
{
    private $operando;

    public function __construct($operando)
    {
        $this->operando = $operando;
    }

    public function getOperando() {
        return $this->operando;
    }
}