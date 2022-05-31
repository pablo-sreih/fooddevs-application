
    <?php
    include("connections.php");
    header("Access-Control-Allow-Origin:*");
    $name=$_GET["title"];
    $reviews=$_GET["review"];
    $query = $mysqli->prepare("INSERT INTO reviews(comment,restaurant_id) VALUES (?,?)");
    $query->bind_param("ss",$reviews,$name);
    $query->execute();
    $response = [];
    $response["success"] = $query;
    echo json_encode($response);
    
    ?>