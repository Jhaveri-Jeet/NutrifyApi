<?php

include "../Includes/Connection.php";

$id = $_GET['id'];
$post = $_POST['Post'];
$name = $_POST['Name'];
$password = $_POST['Password'];

$update = "UPDATE Users SET Post = '$post', Name = '$name', Password = '$password' WHERE Id = $id";
$result = $connection->query($update);
$connection = null;

header("Content-Type: application/json");
if ($result)
    echo json_encode(array("status" => "success"));
else
    echo json_encode(array("status" => "error occurred"));
