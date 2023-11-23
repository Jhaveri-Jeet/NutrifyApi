<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents("php://input");
$data = json_decode($jsonString);

$name = $data['name'];
$gender = $data['gender'];
$age = $data['age'];
$height = $data['height'];
$weight = $data['weight'];
$coachId = $data['coachId'];
$sportsId = $data['sportsId'];
$dietPlanStartDate = $data['dietPlanStartDate'];

$insert = "INSERT INTO Athelet (Name,Gender,Age,Height, Weight, CoachId, SportsId, DietPlanStartDate) VALUES ('$name', '$gender', '$age', '$height', '$weight', '$coachId', '$sportsId', '$dietPlanStartDate')";
$result = $connection->query($insert);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
