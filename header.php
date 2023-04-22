<?php
    $HOME = "index.php";
    function armarUrl() {
        $nombre_archivo = basename($_SERVER['PHP_SELF']);
        if($nombre_archivo == "index.php") {
            return "resultados";
        }
        if($nombre_archivo == "insta-img.php") {
            return '../../../resultados';
        }

        return ".";
    }

    function getEjercicios() {
        $path = (basename($_SERVER["PHP_SELF"]) == "insta-img.php") ? ("../../resultados") : armarUrl();
        // Filtra los elementos que no sean carpetas, por ende son archivos
        return array_filter(scandir($path), function ($archivo) use ($path) {
            return !is_dir($path . "/" . $archivo);
        });
    }

    function chequearActive($ejercicio) {
        return basename($_SERVER['PHP_SELF']) == $ejercicio ? "active" : "";
    }

    function imprimirEjercicios() {
        foreach (getEjercicios() as $index => $ejercicio) {
            $num_archivo = $index - 1;
            $num_ejercicio = $index < 8 ? ($index - 1) : ($index + 1);
            echo "<li><a href='" . armarUrl() . "/resultado-ej-$num_archivo.php'" . " class='" . chequearActive($ejercicio) . "'>Ejercicio $num_ejercicio</a></li>";
        }
    }
?>

<header>
    <h1>Juan Ignacio Oliva</h1>
    <nav>
        <ul>
            <li>
                <a href="<?= basename($_SERVER['PHP_SELF']) == "index.php" ? "" : (basename($_SERVER["PHP_SELF"]) == "insta-img.php" ? "../../../" : "../") ?>index.php" class="<?= chequearActive($HOME) ?>">
                    Home
                </a>
            </li>
            <?php
            imprimirEjercicios()
            ?>
        </ul>
    </nav>
</header>