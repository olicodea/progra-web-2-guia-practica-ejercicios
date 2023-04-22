<?php
include_once "../ejercicios/ejercicio-3.php";
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
        <h2>EJERCICIO 3</h2>
        <article>
            <?php
            $texto1 = "Hola";
            $texto2 = "¿Como estás?";

            echo "<h3>concatenar</h3>";
            echo "Textos concatenados: " . concatenar($texto1, $texto2);

            ?>
        </article>
    </section>
</main>
</body>
</html>