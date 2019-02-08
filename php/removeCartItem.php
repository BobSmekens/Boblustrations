<?php
$product_id = $_GET['artwork_id'];
echo $product_id;
$query = "DELETE FROM cart WHERE artwork_id = '$product_id'";
$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";
include "oopattempt.php";
$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();

$db_result = $connection->conn->query($query);  
header("Location: ../cart.php");
?>