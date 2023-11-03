<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$name = $_POST['name'];
$minimumHeight = $_POST['minimumHeight'];
$minimumWeight = $_POST['minimumWeight'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$dietType = $_POST['dietType'];
$description = $_POST['description'];
$sportId = $_POST['sportId'];

$update = "UPDATE Dirt SET Name = '$name', MinimumHeight = '$minimumHeight', MinimumWeight = '$minimumWeight', Gender= '$gender', Age = '$age', DietType = '$dietType', Description = '$description', SportId = '$sportId' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
