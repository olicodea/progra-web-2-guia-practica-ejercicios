<html>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #1e1e1e;
            color: #F0FFFFFF;
        }

        h1 {
            text-align: center;
        }

        main {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
    </style>
    <body>
        <main>
            <div>
                <h2>EJERCICIO 1</h2>
                <?php
                require_once "ejercicios/ejercicio-1.php";

                echo "<h3>semaforo_a</h3>";
                echo "Color rojo: " . semaforo_a("rojo") . "<br>";
                echo "Color amarillo: " . semaforo_a("amarillo") . "<br>";
                echo "Color verde: " . semaforo_a("verde") . "<br>";
                echo "Color X: " . semaforo_a("azul") . "<br>";

                echo "<h3>semaforo_b</h3>";
                echo "Color rojo: " . semaforo_b("rojo") . "<br>";
                echo "Color amarillo: " . semaforo_b("amarillo") . "<br>";
                echo "Color verde: " . semaforo_b("verde") . "<br>";
                echo "Color X: " . semaforo_b("azul") . "<br>";

                echo "<h3>semaforo_c</h3>";
                echo "Color rojo: " . semaforo_c("rojo") . "<br>";
                echo "Color amarillo: " . semaforo_c("amarillo") . "<br>";
                echo "Color verde: " . semaforo_c("verde") . "<br>";
                echo "Color X: " . semaforo_c("azul") . "<br>";
                ?>
            </div>
            <div>
                <h2>EJERCICIO 2</h2>
                <?php
                require_once "ejercicios/ejercicio-2.php";

                $num1 = 2;
                $num2 = 4;

                echo "<h3>binomioCuadradoPerfecto_a</h3>";
                echo "El binomio cuadrado perfecto de $num1 y $num2 es: " . binomioCuadradoPerfecto_a($num1, $num2);

                echo "<h3>binomioCuadradoPerfecto_b</h3>";
                echo "El binomio cuadrado perfecto de $num1 y $num2 es: " . binomioCuadradoPerfecto_b($num1, $num2);
                ?>

                <h2>EJERCICIO 3</h2>
                <?php
                require_once "ejercicios/ejercicio-3.php";

                $texto1 = "Hola";
                $texto2 = "¿Como estás?";

                echo "<h3>concatenar</h3>";
                echo "Textos concatenados: " . concatenar($texto1, $texto2);

                ?>

                <h2>EJERCICIO 4</h2>
                <?php
                require_once "ejercicios/ejercicio-4.php";
                $num = 0;

                echo "<h3>incrementar</h3>";
                for($i = 0; $i < 3 ; $i++) {
                    echo $num . "<br>";
                    incrementar($num);
                }
                ?>
            </div>
            <div>
                <h2>EJERCICIO 5</h2>
                <?php
                require_once "ejercicios/ejercicio-5.php";

                $numeros = [2,4,6,8];

                echo "<h3>sumatoria_a</h3>";
                echo sumatoria_a($numeros);

                echo "<h3>sumatoria_b</h3>";
                echo sumatoria_b($numeros);

                echo "<h3>sumatoria_c</h3>";
                echo sumatoria_c($numeros);
                ?>
            </div>
        </main>
    </body>
</html>