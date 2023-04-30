<?php
    $HOME = "index.php";
    function armarUrl() {
        $nombre_archivo = basename($_SERVER['PHP_SELF']);

        if($nombre_archivo == "index.php") {
            return "ejercicios";
        }

        if($nombre_archivo == "insta-img.php") {
            return "../..";
        }

        return "../../ejercicios";
    }

    function chequearActive($ejercicio) {
        return basename($_SERVER['PHP_SELF']) == $ejercicio ? "active" : "";
    }

    function imprimirEjercicios() {
        for($i = 1; $i <= 18; $i++) {
            if($i <= 6 || $i >= 9) {
                echo "<li><a href='" . armarUrl() . "/ejercicio $i/resultado-ej-$i.php'>Ejercicio $i</a></li>";
            }
        }
    }
?>

<header>
    <h1>Juan Ignacio Oliva</h1>
    <nav>
        <ul>
            <li>
                <a href="<?= basename($_SERVER['PHP_SELF']) == "index.php" ? "" : "../../"?>index.php" class="<?= chequearActive($HOME) ?>">
                    Home
                </a>
            </li>
            <?php
            imprimirEjercicios()
            ?>
        </ul>
    </nav>
</header>