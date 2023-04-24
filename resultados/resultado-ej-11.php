<?php
    function mostrarMenu() {
        $menu = parse_ini_file("../ejercicios/ejercicio-13/menu.ini");

        echo "<article class='card'>";

        if(isset($_POST["entrada"])) {
            echo "Entrada: ". $menu["entrada"] . "<br>";
        }

        if(isset($_POST["principal"])) {
            echo "Plato principal: " . $menu["principal"] . "<br>";
        }

        if(isset($_POST["guarnicion"])) {
            echo "Guarnición: " . $menu["guarnicion"] . "<br>";
        }

        if(isset($_POST["postre"])) {
            echo "Postre: " . $menu["postre"] . "<br>";
        }

        echo "</article>";
    }
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
    <section class="instagramo">
        <h2>EJERCICIO 13 - Menú</h2>
        <?php
        if (isset($_POST["entrada"]) || isset($_POST["principal"]) || isset($_POST["guarnicion"]) || isset($_POST["postre"])) {
            mostrarMenu();
        } else {
            include_once "../ejercicios/ejercicio-13/form.php";
        }
        ?>
    </section>
</main>
</body>
</html>