<?php
    include "../Includes/Connection.php";

    $name = $_POST['name'];
    $description = $_POST['description'];
    $recipeId = $_POST['recipeId'];
    $dietId = $_POST['dietId'];
    $mealTime = $_POST['mealTime'];

    $insert = "INSERT INTO DietPlan (Name,Description,RecipeId, DietId, MealTime) VALUES ('$name', '$description', '$recipeId', '$dietId', '$mealTime')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result->rowCount())
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>