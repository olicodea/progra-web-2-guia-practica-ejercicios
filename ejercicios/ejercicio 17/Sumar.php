<?php

class Sumar
{
    private $operando1;
    private $operando2;

    public function __construct($operando1, $operando2) {
        $this->operando1 = method_exists($operando1, "getOperando1") ? $operando1->getOperando1() : $operando1;
        $this->operando2 = method_exists($operando2, "getOperando2") ? $operando2->getOperando2() : $operando2;
    }

    public function resolverEcuacion() {
        return $this->operando1->getOperando() + $this->operando2->getOperando();
    }

    public function getOperando1() {
        return $this->operando1;
    }

    public function getOperando2() {
        return $this->operando2;
    }
}