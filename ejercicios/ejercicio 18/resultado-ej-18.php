<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de tps</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<?php
include_once "../../header.php";
?>
<main>
    <section class="instagramo">
        <h2>EJERCICIO 18 - Pacman</h2>
        <article class="card">
            <?php
            include_once "../../ejercicios/ejercicio 18/Fantasma.php";
            include_once "../../ejercicios/ejercicio 18/FantasmaComestible.php";
            include_once "../../ejercicios/ejercicio 18/Packman.php";
            include_once "../../ejercicios/ejercicio 18/Partida.php";
            include_once "../../ejercicios/ejercicio 18/FinPartida.php";
            include_once "../../ejercicios/ejercicio 18/Pildora.php";

            $partida = new Partida();
            $packman = new Packman(0,3);
            $pildora = new Pildora();
            $fantasma = new Fantasma();
            $fantasmaComestible = new FantasmaComestible();

            try {
                $packman->chocaContra($fantasmaComestible);
                $partida->mostrarPuntaje($packman);
                $packman->chocaContra($fantasmaComestible);
                $packman->chocaContra($fantasmaComestible);
                $partida->mostrarPuntaje($packman);
                $packman->chocaContra($pildora);
                $partida->mostrarPuntaje($packman);
                $packman->chocaContra($pildora);
                $packman->chocaContra($pildora);
                $partida->mostrarPuntaje($packman);
                $packman->chocaContra($fantasma);
                $partida->mostrarPuntaje($packman);
                $packman->chocaContra($fantasma);
                $packman->chocaContra($fantasma);
                $partida->mostrarPuntaje($packman);
            } catch (FinPartida $exception) {
                echo $exception->getMessage();
            }
            ?>
        </article>
    </section>
</main>
</body>
</html>