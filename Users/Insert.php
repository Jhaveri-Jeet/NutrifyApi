<?php
    include "../Includes/Connection.php";

    $post = $_POST['Post'];
    $name = $_POST['Name'];
    $password = $_POST['Password'];

    $insert = "INSERT INTO Users (Post, Name, Password) VALUES ('$post', '$name', '$password')";
    $result = $connection->query($insert);
    $connection = null;
    
    header("Content-Type: application/json");
    if($result)
        echo json_encode(array("status" => "success"));
    else
        echo json_encode(array("status" => "error occurred"));
?>