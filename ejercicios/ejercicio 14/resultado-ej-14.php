<?php
function crearMatrizCuadrada($dimension) {
    $matrix = [];
    for($i = 1; $i <= $dimension; $i++) {
        $fila = [];
        for($j = 0; $j < $dimension; $j++) {
            $fila[] = $i + $j;
        }
        $matrix[] = $fila;
    }
    return $matrix;
}

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
        <h2>EJERCICIO 14 - Matrix / Matriz</h2>
        <h4>Seleccionar la dimensión de la matriz cuadrada</h4>
        <form action="resultado-ej-14.php" class="card" method="POST" enctype="application/x-www-form-urlencoded">
            <label for="dimension">Dimensión:</label>
            <input type="number" name="dimension" id="dimension" placeholder="Dimensión de la matriz..">
            <input type="submit" value="GUARDAR" class="btn">
        </form>
        <article class="card card-respuestas">
            <?php
            if(isset($_POST["dimension"]) && $_POST["dimension"] > 0) {
                $matriz = crearMatrizCuadrada($_POST["dimension"]);

                echo "<div>";
                echo "<p>Respuesta a: </p> <br>";
                for($i=0; $i < count($matriz); $i++) {
                    echo $matriz[$i][$i] . "<br>";
                }
                echo "</div>";

                echo "<div>";
                echo "<p>Respuesta b: </p> <br>";
                for($i=0; $i < $_POST["dimension"]; $i++) {
                    $fila_al_reves = array_reverse($matriz[$i]);
                    echo $fila_al_reves[$i] . "<br>";
                }
                echo "</div>";

                echo "<div>";
                echo "<p>Respuesta c: </p> <br>";
                $suma = 0;
                for($i=0; $i < $_POST["dimension"]; $i++) {
                    for($j = 0; $j < $_POST["dimension"]; $j++) {
                        $suma += $matriz[$i][$j];
                    }
                }
                echo "La suma de los valores es: <br> $suma";
                echo "</div>";
            }
            ?>
        </article>
    </section>
</main>
</body>
</html>