<?php
    $dischi= file_get_contents('./js/dischi.json');


    $listaDischi=json_decode($dischi, true);

    header('Content-Type: application/json');

    echo json_encode($listaDischi);
?>