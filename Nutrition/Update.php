<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$dietPlanId = $_POST['dietPlanId'];

$update = "UPDATE Nutrition SET Name = '$name', Description = '$description', DietPlanId = '$dietPlanId' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
