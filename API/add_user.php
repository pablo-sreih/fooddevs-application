<?php
    include("connections.php");
    header("Access-Control-Allow-Origin:*");
 
    $full_name=$_POST["full_name"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $address="zandouqah";
    $is_admin=0;
    $query = $mysqli->prepare("INSERT INTO users(full_name,password,email,address,is_admin) VALUES (?,?,?,?,?)");
    $query->bind_param("ssssi",$full_name,$password,$email,$address,$is_admin);
    $query->execute();

    $response = [];
    $response["success"] = true;

    echo json_encode($response);
    

?>