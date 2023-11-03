<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$coachId = $_POST['coachId'];
$dietId = $_POST['dietId'];
$sportsId = $_POST['sportsId'];
$dietPlanStartDate = $_POST['dietPlanStartDate'];

$update = "UPDATE Athelet SET Name = '$name', Gender = '$gender', Age = '$age', Height= '$height', Weight = '$weight', CoachId = $coachId', DietId = '$dietId', SportsId = '$sportsId', DietPlanStartDate = '$dietPlanStartDate' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
