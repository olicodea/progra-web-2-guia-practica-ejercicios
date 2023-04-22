<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de tps</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
<?php
include "../../header.php";
?>
<main>
    <article class="card">
        <h3><?=$_GET["imgNombre"]?></h3>
        <img src="<?=$_GET["img"]?>" alt="">
    </article>
</main>
</body>
</html>