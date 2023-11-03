<?php
    include "../Includes/Connection.php";

    $name = $_POST['name'];
    $description = $_POST['description'];
    $dietPlanId = $_POST['dietPlanId'];

    $insert = "INSERT INTO Nutrition (Name,Description,DietPlanId) VALUES ('$name', '$description', '$dietPlanId')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result->rowCount())
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>