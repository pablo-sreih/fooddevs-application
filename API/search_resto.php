<?php
include("connections.php");
header("Access-Control-Allow-Origin:*");

$name = $_POST["name"];
$query = $mysqli->prepare("SELECT restaurant_id from restaurants where name = ?");
$query->bind_param("s", $name);
$query->execute();
$query->store_result();
$num_rows = $query->num_rows;
$query->bind_result($id);
$query->fetch();
$response = [];
if($num_rows == 0){
    $response["response"] = false;
}else{
    $response["response"] = true;
    $response["user_id"] = $id;
}
echo json_encode($response);
?>