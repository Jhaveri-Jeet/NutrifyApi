<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$id = $_GET['id'];
$select = "SELECT * FROM Diet WHERE Id = $id";
$result = $connection->query($select);
$fetch = $result->fetch(PDO::FETCH_OBJ);

echo json_encode($fetch);
