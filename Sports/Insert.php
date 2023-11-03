<?php
    include "../Includes/Connection.php";

    $name = $_POST['Name'];

    $insert = "INSERT INTO Sports (Name) VALUES ('$name')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result->rowCount())
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>