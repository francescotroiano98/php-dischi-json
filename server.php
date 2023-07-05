<?php
    $stringRawData = file_get_contents('./database/data.json');


    $discList = json_decode($stringRawData);

    //$discList[] = ''; da utilizzare se voglio aggiungere qualcosa successivamentes

    header('Content-Type: application/json');
    
    echo json_encode($discList);

    




?>