<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données JSON envoyées depuis JavaScript
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    // Trier le tableau
    $tab= $data;
    sort($tab);

    // Renvoyer le tableau trié en tant que réponse JSON
    header('Content-Type: application/json');
    echo json_encode($tab);
}
?>