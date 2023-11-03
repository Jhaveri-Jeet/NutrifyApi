<?php
    include "../Includes/Connection.php";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $sportId = $_POST['sportId'];

    $insert = "INSERT INTO Coach (Name,Gender,Age, SportsId) VALUES ('$name', '$gender', '$age', '$sportId')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result->rowCount())
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>