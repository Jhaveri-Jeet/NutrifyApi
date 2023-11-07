<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents("php://input");
$data = json_decode($jsonString);

if ($data === null) 
    http_response_code(400);

$id = $data['id'];
$name = $data['name'];
$minimumHeight = $data['minimumHeight'];
$minimumWeight = $data['minimumWeight'];
$gender = $data['gender'];
$age = $data['age'];
$dietType = $data['dietType'];
$description = $data['description'];
$sportId = $data['sportId'];

$update = "UPDATE Diet SET Name = '$name', MinimumHeight = '$minimumHeight', MinimumWeight = '$minimumWeight', Gender= '$gender', Age = '$age', DietType = '$dietType', Description = '$description', SportId = '$sportId' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

if ($result->rowCount())
    echo json_encode(["status" => "success"]);
else
    echo json_encode(["status" => "error occurred"]);
