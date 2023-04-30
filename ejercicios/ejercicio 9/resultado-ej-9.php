<?php
    if(!empty($_POST["nombre"]) && !empty($_FILES["archivo"])) {
        $nombre_original = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombre_original, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["archivo"]["tmp_name"], "../../imagenes/" . $_POST["nombre"] . ".$extension");
    }
    function getImagenes() {
        $path = "../../imagenes";
        // Filtra los elementos que no sean carpetas, por ende son archivos
        return array_filter(scandir($path), function ($archivo) use ($path) {
            return !is_dir($path . "/" . $archivo);
        });
    }
    function imprimirImagenes() {
        foreach (getImagenes() as $imagen) {
            echo "<article class='card'><img src='../../imagenes/$imagen' alt='$imagen'><h3>$imagen</h3></article>";
        }
    }

    function imprimirForm() {
        $form = "<form class='card' action='resultado-ej-9.php' method='POST' enctype='multipart/form-data'>";
        $form .= "<input type='text' name='nombre' placeholder='Nombre de imagen'>";
        $form .= "<input type='file' name='archivo'>";
        $form .= "<input type='submit' name='enviar' value='PUBLICAR' class='btn'></form>";
        echo $form;
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
        <h2>EJERCICIO 9 - Instagramo</h2>
        <?php imprimirImagenes(); ?>
        <?php imprimirForm(); ?>
    </section>
</main>
</body>
</html>