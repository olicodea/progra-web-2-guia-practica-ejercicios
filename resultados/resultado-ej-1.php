<?php
include_once "../ejercicios/ejercicio-1.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de tps</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
include_once "../header.php";
?>
<main>
    <section>
        <h2>SOLUCIÓN DEL EJERCICIO 1</h2>
        <article>
            <?php
            echo "<h3>semaforo_a</h3>";
            echo "Color rojo: " . semaforo_a("rojo") . "<br>";
            echo "Color amarillo: " . semaforo_a("amarillo") . "<br>";
            echo "Color verde: " . semaforo_a("verde") . "<br>";
            echo "Color X: " . semaforo_a("azul") . "<br>";
            ?>
        </article>
        <article>
            <?php
            echo "<h3>semaforo_b</h3>";
            echo "Color rojo: " . semaforo_b("rojo") . "<br>";
            echo "Color amarillo: " . semaforo_b("amarillo") . "<br>";
            echo "Color verde: " . semaforo_b("verde") . "<br>";
            echo "Color X: " . semaforo_b("azul") . "<br>";
            ?>
        </article>
        <article>
            <?php
            echo "<h3>semaforo_c</h3>";
            echo "Color rojo: " . semaforo_c("rojo") . "<br>";
            echo "Color amarillo: " . semaforo_c("amarillo") . "<br>";
            echo "Color verde: " . semaforo_c("verde") . "<br>";
            echo "Color X: " . semaforo_c("azul") . "<br>";
            ?>
        </article>
    </section>
</main>
</body>
</html>