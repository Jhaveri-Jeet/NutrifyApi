<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents('php://input');
$data = json_decode($jsonString);

$id = $data['id'];
$delete = "DELETE FROM Diet WHERE Id = $id";
$result = $connection->query($delete);

if ($result->rowCount() > 0)
    echo json_encode(["status" => "success"]);
else    
    echo json_encode(["status" => "error occurred"]);
