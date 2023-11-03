<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$name = $_POST['Name'];

$update = "UPDATE Sports SET Name = '$name' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result->rowCount())
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
