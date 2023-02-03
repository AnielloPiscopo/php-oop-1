<?php

header('Content-Type: application/json');
$jsonData = file_get_contents('./assets/db/db.json');


if(is_null($jsonData)){
    http_response_code(404);
}else{
    $decodedData = json_decode($jsonData,true);

    echo json_encode($decodedData);
}