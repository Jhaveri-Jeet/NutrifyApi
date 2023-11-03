<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$mealName = $_POST['MealName'];
$description = $_POST['Description'];

$update = "UPDATE Recipe SET MealName = '$mealName', Description = '$description' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
