<?php
include_once "../ejercicios/ejercicio-16/CreadorJugada.php";
include_once "../ejercicios/ejercicio-16/Papel.php";
include_once "../ejercicios/ejercicio-16/Piedra.php";
include_once "../ejercicios/ejercicio-16/Tijera.php";
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
        <h2>EJERCICIO 16 - Piedra, papel o tijera</h2>
        <article class="card">
            <form action="resultado-ej-14.php" method="GET" enctype="application/x-www-form-urlencoded">
                <div class="formGroup">
                    <label for="jugador1">Jugador 1:</label>
                    <input type="text" name="jugador1" id="jugador1">
                </div>
                <div class="formGroup">
                <label for="jugada1">Jugada 1:</label>
                <select name="jugada1" id="jugada1">
                    <option value="Piedra">Piedra</option>
                    <option value="Papel">Papel</option>
                    <option value="Tijera">Tijera</option>
                </select>
                </div>
                <div class="formGroup">
                    <label for="jugador2">Jugador 2:</label>
                    <input type="text" name="jugador2" id="jugador2"></div>
                <div class="formGroup">
                    <label for="jugada2">Jugada 2:</label>
                    <select name="jugada2" id="jugada2">
                        <option value="Piedra">Piedra</option>
                        <option value="Papel">Papel</option>
                        <option value="Tijera">Tijera</option>
                    </select>
                </div>
                <input type="submit" value="JUGAR" class="btn">
            </form>
            <?php
            if(isset($_GET["jugador1"]) && isset($_GET["jugador2"])) {
                $jugada1 = CreadorJugada::crearJugada($_GET["jugada1"], $_GET["jugador1"]);
                $jugada2 = CreadorJugada::crearJugada($_GET["jugada2"], $_GET["jugador2"]);
                echo "<p class='text-center'>Resultado: " . $jugada1->competirContra($jugada2) . "</p>";
            }
            ?>
        </article>
    </section>
</main>
</body>
</html>