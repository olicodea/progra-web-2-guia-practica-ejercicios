<?php
/*
 * 1. Constructor que recibe nombre, apellido
 * 2. Implementar metodo saludoFormal($horario) que responda "nombre completo" + "prefijo" dependiendo del horario
 * 3. Implementar saludoInformal($horario). Responde sin el apellido, iniciando con un "hola" y finalizando con "que tengas" + "prefijo"
 *
 * saludoFormal() - Prefijos y horarios
 * - 05hs a 13hs "Buenos días"
 * - 13hs a 21hs  "Buenas tardes"
 * - 21hs a 05hs "Buenas noches"
 *
 * - Ej: Clase instanciada para Ezequiel Perez, y parámetro 9hs => "Buenos días Ezequiel Perez"
 *
 * saludoInformal() - Prefijos y horarios
 * - 05hs a 13hs "un buen día"
 * - 13hs a 21hs  "una buena tarde"
 * - 21hs a 05hs "una buena noche"
 *
 * - Ej: Para la instancia Ezequiel Perez y parametro 9hs: "¡Hola Ezequiel! Que tengas un buen día"
 */

include_once "ValidaHorario.php";
class Saludar
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario) {
        switch (ValidaHorario::validar($horario)) {
            case "dia":
                echo "Buenos días $this->nombre $this->apellido";
                break;
            case "tarde":
                echo "Buenas tardes $this->nombre $this->apellido";
                break;
            case "noche":
                echo "Buenas noches $this->nombre $this->apellido";
                break;
            default:
                echo "Buenas";
        }
    }

    public function saludoInformal($horario) {
        switch (ValidaHorario::validar($horario)) {
            case "dia":
                echo "¡Hola $this->nombre! Que tengas un buen día";
                break;
            case "tarde":
                echo "¡Hola $this->nombre! Que tengas una buena tarde";
                break;
            case "noche":
                echo "¡Hola $this->nombre! Que tengas una buena noche";
                break;
            default:
                echo "Hola";
        }
    }
}