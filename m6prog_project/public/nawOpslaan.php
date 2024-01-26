<?php
    include '../source/database.php';
    $data = file_get_contents('php://input');
    $json = json_decode($data);

    $postcode = substr($json->postcode, 0, 5);
    
    $conn = database_connect();
    $q = "insert into naw (naam, email, straat, huisnummer, postcode) values (?, ?, ?, ?, ?); ";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("sssss",
                        $json->naam,
                        $json->email,
                        $json->straat,
                        $json->huisnummer,
                        $postcode
                    );
    $result = $stmt->execute();
    $response=["succeeded" => $result];

    echo json_encode($response);

?>