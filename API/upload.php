<?php
    include("connections.php");
    header("Access-Control-Allow-Origin:*");
 
    $resto_name=$_POST["resto_name"];
    $category=$_POST["category"];
    $location=$_POST["location"];
    $avg_cost=$_POST["average_cost"];
    $query = $mysqli->prepare("INSERT INTO restaurants(name,location,category,average_cost) VALUES (?,?,?,?)");
    $query->bind_param("sssi",$resto_name,$location,$category,$avg_cost);
    $query->execute();

    $response = [];
    $response["success"] = true;

    echo json_encode($response);
    

?>