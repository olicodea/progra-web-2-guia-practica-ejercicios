<?php
include_once "../../ejercicios/ejercicio 2/ejercicio-2.php";
?>
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
    <section>
        <h2>EJERCICIO 2</h2>
        <article>
            <?php
            $num1 = 2;
            $num2 = 4;

            echo "<h3>binomioCuadradoPerfecto_a</h3>";
            echo "El binomio cuadrado perfecto de $num1 y $num2 es: " . binomioCuadradoPerfecto_a($num1, $num2);

            echo "<h3>binomioCuadradoPerfecto_b</h3>";
            echo "El binomio cuadrado perfecto de $num1 y $num2 es: " . binomioCuadradoPerfecto_b($num1, $num2);
            ?>
        </article>
    </section>
</main>
</body>
</html>