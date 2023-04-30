<?php
include_once "../../ejercicios/ejercicio 5/ejercicio-5.php";
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
        <h2>EJERCICIO 5</h2>
        <article>
            <?php
            $numeros = [2,4,6,8];
            echo "Numeros a sumar: ";
            foreach ($numeros as $numero) {
                echo $numero . " ";
            }

            echo "<h3>sumatoria_a</h3>";
            echo sumatoria_a($numeros);

            echo "<h3>sumatoria_b</h3>";
            echo sumatoria_b($numeros);

            echo "<h3>sumatoria_c</h3>";
            echo sumatoria_c($numeros);
            ?>
        </article>
    </section>
</main>
</body>
</html>