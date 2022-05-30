<?php
include("connections.php");
header("Access-Control-Allow-Origin:*");
$query = $mysqli->prepare("SELECT users.full_name, reviews.comment
FROM users
INNER JOIN reviews ON users.user_id=reviews.user_id; ");
$query->execute();
$array = $query->get_result();
$response = [];
while($todo = $array->fetch_assoc()){
    $response[] = $todo;
} 
$json = json_encode($response);
echo $json;

?>