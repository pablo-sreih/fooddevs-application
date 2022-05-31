<?php
include("connections.php");
header("Access-Control-Allow-Origin:*");

$email = $_POST["email"];
$password = $_POST["password"];
$query = $mysqli->prepare("SELECT user_id from users where email = ? AND password = ?");
$query->bind_param("ss", $email, $password);
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