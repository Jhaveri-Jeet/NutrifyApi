<?php
    include "../Includes/Connection.php";

    $mealName = $_POST['MealName'];
    $description = $_POST['Description'];

    $insert = "INSERT INTO Recipe (MealName, Description) VALUES ('$mealName', '$description')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result->rowCount())
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>