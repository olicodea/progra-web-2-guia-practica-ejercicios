<?php
    function mostrarForm() {
        echo "<form action='resultado-ej-11.php' method='GET' enctype='text/plain'>";
        echo "<label for='options'>Cantidad de dados</label>";
        echo "<select name='options' id='options'>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
        echo "</select>";
        echo "<input type='submit' name='lanzar' value='LANZAR' class='btn'>";
        echo "</form>";
    }

    function mostrarDados($dados) {
        $puntaje = 0;

        for ($i = 0; $i < $dados; $i++) {
            $aleatorio = rand(1,6);
            $puntaje += $aleatorio;

            echo "<div class='cara-$aleatorio'>";

            if($aleatorio > 0 && $aleatorio <= 3) {
                for ($j = 0; $j < $aleatorio; $j++) {
                    echo "<div class='punto'></div>";
                }
            }

            if($aleatorio == 4 || $aleatorio == 6 || $aleatorio == 5) {
                $aleatorioAux = $aleatorio == 5 ? $aleatorio - 1 : $aleatorio;
                echo "<div class='columna'>";
                for($j = 0; $j < $aleatorioAux/2 ; $j++) {
                    echo "<div class='punto'></div>";
                }
                echo "</div>";

                if ($aleatorio == 5) {
                    echo "<div class='punto medio'></div>";
                }

                echo "<div class='columna'>";
                for($j = 0; $j < $aleatorioAux/2 ; $j++) {
                    echo "<div class='punto'></div>";
                }
                echo "</div>";
            }

            echo "</div>";
        }

        echo "<div>El puntaje obtenido es: $puntaje</div>";
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
    <link rel="stylesheet" href="../../dado/dado.css">
</head>
<body>
<?php
include_once "../../header.php";
?>
<main>
    <section class="instagramo">
        <h2>EJERCICIO 11 - Lanzar dados</h2>
        <?php
            if(!isset($_GET['options'])) {
                mostrarForm();
            } else {
                mostrarDados($_GET['options']);
            }
        ?>
    </section>
</main>
</body>
</html>