<?php

class ValidaHorario
{
    public static function validar($horario) {
        switch ($horario) {
            case $horario > 5 && $horario < 13:
                return "dia";
            case $horario >= 13 && $horario < 21:
                return "tarde";
            case ($horario >= 21 && $horario <= 23)  || ($horario >= 0 && $horario <= 5):
                return "noche";
        }
        return "";
    }
}