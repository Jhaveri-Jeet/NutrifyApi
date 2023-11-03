<?php
    include "../Includes/Connection.php";

    $name = $_POST['name'];
    $minimumHeight = $_POST['minimumHeight'];
    $minimumWeight = $_POST['minimumWeight'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $dietType = $_POST['dietType'];
    $description = $_POST['description'];
    $sportId = $_POST['sportId'];

    $insert = "INSERT INTO Diet (Name,MinimumHeight,MinimumWeight,Gender, Age, DietType, Description, SportId) VALUES ('$name', '$minimumHeight', '$minimumWeight', '$gender', '$age', '$dietType', '$description', '$sportId')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result->rowCount())
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>