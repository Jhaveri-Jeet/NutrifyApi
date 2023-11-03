<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$sportId = $_POST['sportId'];

$update = "UPDATE Coach SET Name = '$name', Gender = '$gender', Age = '$age', SportsId = '$sportId' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
