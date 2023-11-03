<?php
include "../Includes/Connection.php";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$coachId = $_POST['coachId'];
$sportsId = $_POST['sportsId'];
$dietPlanStartDate = $_POST['dietPlanStartDate'];

$insert = "INSERT INTO Athelet (Name,Gender,Age,Height, Weight, CoachId, SportsId, DietPlanStartDate) VALUES ('$name', '$gender', '$age', '$height', '$weight', '$coachId', '$sportsId', '$dietPlanStartDate')";
$result = $connection->query($insert);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
