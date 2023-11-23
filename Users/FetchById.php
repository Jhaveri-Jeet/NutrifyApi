<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents("php://input");
$data = json_decode($jsonString);

$id = $data->id;

$query = "SELECT * FROM Users WHERE UserId = ?";
$params = [$id];
$statement = $connection->prepare($query);
$result = $statement->execute($params);
$fetch = $statement->fetch(PDO::FETCH_OBJ);

if (!$fetch)
    http_response_code(400);

echo json_encode($fetch);
