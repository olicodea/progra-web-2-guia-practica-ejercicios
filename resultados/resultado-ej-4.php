<?php
include_once "../ejercicios/ejercicio-4.php";
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
        <h2>EJERCICIO 4</h2>
        <article>
            <?php
            $num = 0;

            echo "<h3>incrementar</h3>";
            for($i = 0; $i < 3 ; $i++) {
                echo $num . "<br>";
                incrementar($num);
            }
            ?>
        </article>
    </section>
</main>
</body>
</html>