<?php

include "../Includes/Connection.php";

$select = "SELECT * FROM Diet";
$result = $connection->query($select);
$fetch = $result->fetchAll(PDO::FETCH_OBJ);

header("Content-Type: application/json");
echo json_encode($fetch);
