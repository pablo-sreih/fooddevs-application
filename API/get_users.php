<?php
include("connections.php");
header("Access-Control-Allow-Origin:*");
$query = $mysqli->prepare("SELECT full_name from users");
$query->execute();
$array = $query->get_result();
$response = [];
while($todo = $array->fetch_assoc()){
    $response[] = $todo;
} 
$json = json_encode($response);
echo $json;

?>