<?php

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
    <section class="instagramo">
        <h2>EJERCICIO 12</h2>
        <?php
            if(!isset($_POST["nombre"]) && !isset($_POST["planeta"])) {
                include_once "../../ejercicios/ejercicio 12/ej-12-form.php";
            } else {
                include_once "../../ejercicios/ejercicio 12/ej-12-list.php";
            }
        ?>
    </section>
</main>
</body>
</html>