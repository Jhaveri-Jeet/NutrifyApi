<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$select = "SELECT * FROM Coach WHERE Id = $id";
$result = $connection->query($select);
$fetch = $result->fetchAll(PDO::FETCH_ASSOC);
$connection = null;

header("Content-Type: application/json");
echo json_encode($fetch);

?>