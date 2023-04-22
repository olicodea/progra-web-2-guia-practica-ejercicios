<?php
include_once "../ejercicios/ejercicio-6/Saludar.php";
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
        <h2>EJERCICIO 6 - Saludo</h2>
        <article>
            <?php
            $saludar1 = new Saludar("Juan", "Oliva");

            $fecha = new DateTime("2023/03/13");
            $fecha->setTime(6, 0);
            $hora = $fecha->format("H");

            $saludar1->saludoFormal($hora);
            echo "<br>";
            $saludar1->saludoInformal(15);
            echo "<br>";
            $saludar1->saludoFormal(isset($_GET["hora"]) ? $_GET["hora"] : 0);
            ?>
        </article>
    </section>
</main>
</body>
</html>