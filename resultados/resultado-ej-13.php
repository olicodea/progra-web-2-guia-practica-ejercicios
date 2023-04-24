<?php
$palabra = "mate";
$texto = "El aroma del mate me transporta a mi infancia, cuando compartía un ritual con mi familia en el campo. La bebida que nos une, el mate, nos brinda consuelo en los momentos más sencillos de la vida. Y es que el mate está siempre presente en nuestras charlas y en nuestros corazones, es parte de nuestra identidad cultural.";

function buscarPalabra($palabra, $texto) {
    $logitudPalabra = strlen($palabra);
    $longitudTexto = strlen($texto);
    $ocurrencias = 0;
    $i = 0;

    while($i < $longitudTexto) {
        $coinciden = true;
        for($j = 0; $j < $logitudPalabra; $j++) {
            if($texto[$i + $j] != $palabra[$j]) {
                $coinciden = false;
                break;
            }
        }
        if($coinciden) {
            $ocurrencias++;
        }
        $i++;
    }

    return $ocurrencias;
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
        <h2>EJERCICIO 15 - Buscando palabra en String</h2>
        <article class="card">
            <?php
            echo "<h4>La palabra a buscar es: $palabra</h4>";
            echo "<p>El texto en el que se buscara es: $texto</p>";
            ?>
        </article>
            <?php
            echo "<article class='card'>";
            echo "La palabra `$palabra` aparece: " . buscarPalabra($palabra, $texto) . " veces.";
            echo "</article>";
            ?>
    </section>
</main>
</body>
</html>