<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$recipeId = $_POST['recipeId'];
$dietId = $_POST['dietId'];
$mealTime = $_POST['mealTime'];

$update = "UPDATE Users SET Post = '$post', Name = '$name', Password = '$password' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
