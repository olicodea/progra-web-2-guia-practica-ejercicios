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
        <h2>EJERCICIO 17 - Calcula Doris</h2>
        <article class="card">
            <?php
            include_once "../../ejercicios/ejercicio 17/Operando.php";
            include_once "../../ejercicios/ejercicio 17/Restar.php";
            include_once "../../ejercicios/ejercicio 17/Sumar.php";
            include_once "../../ejercicios/ejercicio 17/Multiplicar.php";

            $resultado = new Sumar(new Restar(new Operando(5), new Operando(3)), new Sumar(new Operando(3), new Operando(4)));
            $multiplicado = new Multiplicar(new Operando($resultado->resolverEcuacion()), new Operando(2));
            echo "El resultado es: " . $multiplicado->resolverEcuacion();
            ?>
        </article>
    </section>
</main>
</body>
</html>