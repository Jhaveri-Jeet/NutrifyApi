<?php

header("Content-Type: application/json");
include "../Includes/Connection.php";

$jsonString = file_get_contents("php://input");
$data = json_decode($jsonString);

$roleId = $data['roleId'];
$userId = $data['userId'];
$password = $data['password'];

$query = "INSERT INTO Users (RoleId,UserId,Password) VALUES(?,?,?)";
$params = [$roleId, $userId, $password];

$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
