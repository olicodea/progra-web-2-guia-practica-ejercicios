<?php
$json = file_get_contents("../ejercicios/ejercicio-12/visitas.json");
$visitas = json_decode($json, true);
$nuevaVisita = array(
  "nombre" => $_POST["nombre"], "planeta" => $_POST["planeta"]
);
$visitas[] = $nuevaVisita; //Aqui agregamos un elemento al array $visitas. Otra opcion es array_push($visitas, $nuevaVisita)

file_put_contents("../ejercicios/ejercicio-12/visitas.json", json_encode($visitas));

function contarVisitas($visitas) {
    $contVisitasExtraterrestres = 0;
    foreach ($visitas as $visita) {
        if($visita["planeta"] != "Tierra") {
            $contVisitasExtraterrestres++;
        }
    }
    return $contVisitasExtraterrestres;
}

function mostrarVisitantes($visitas) {
    echo "<h4>Visitantes que pasaron por el control</h4>";
    foreach ($visitas as $visita) {
        echo $visita["nombre"] . " de " . $visita["planeta"] . " <br>";
    }
}

$cantVisitas = contarVisitas($visitas);
mostrarVisitantes($visitas);

print_r("<br> Visitas extraterrestres: $cantVisitas");
?>