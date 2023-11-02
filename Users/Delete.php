<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$delete = "DELETE FROM Users WHERE Id = $id";
$result = $connection->query($delete);
$connection = null;

header("Content-Type: application/json");

if ($result->rowCount() > 0)
    echo json_encode(array("status" => "success"));
else    
    echo json_encode(array("status" => "error occurred"));
?>