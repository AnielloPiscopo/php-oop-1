<?php
    include_once __DIR__ . '/function.php';

    header('Content-Type: application/json');

    $jsonData = file_get_contents('../assets/db/movies.json');



    $offsetData = 0;
    $lengthData = 10;



    if(is_null($jsonData)){
        http_response_code(404);
    }else{
        $decodedData = json_decode($jsonData,true);

        $decodedSlicedData = getAPartOfList($decodedData,$offsetData,$lengthData);


        echo json_encode($decodedSlicedData);
    }