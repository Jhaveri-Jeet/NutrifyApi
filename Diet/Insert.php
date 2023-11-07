<?php
header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents('php://input');
$data = json_decode($jsonString);

if ($data === null) {
    http_response_code(400);
    echo json_encode(["status" => "error occurred"]);
    exit;
}

$name = $data['name'];
$minimumHeight = $data['minimumHeight'];
$minimumWeight = $data['minimumWeight'];
$gender = $data['gender'];
$age = $data['age'];
$dietType = $data['dietType'];
$description = $data['description'];
$sportId = $data['sportId'];

$insert = "INSERT INTO Diet (Name, MinimumHieght, MinimumWeight, Gender, Age, DietType, Description, SportId) VALUES ('$name', '$minimumHeight', '$minimumWeight', '$gender', '$age', '$dietType', '$description', '$sportId')";
$result = $connection->query($insert);

$connection = null;

if ($result->rowCount() > 0) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error occurred"]);
}
