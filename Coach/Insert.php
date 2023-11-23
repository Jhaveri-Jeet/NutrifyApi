<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents("php://input");
$data = json_decode($jsonString);

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$sportId = $_POST['sportId'];

$insert = "INSERT INTO Coach (Name,Gender,Age, SportsId) VALUES ('$name', '$gender', '$age', '$sportId')";
$result = $connection->query($insert);
$connection = null;

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
