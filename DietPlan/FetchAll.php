<?php

include "../Includes/Connection.php";

$select = "SELECT * FROM DietPlan";
$result = $connection->query($select);
$fetch = $result->fetchAll(PDO::FETCH_ASSOC);
$connection = null;

header("Content-Type: application/json");
echo json_encode($fetch);

?>