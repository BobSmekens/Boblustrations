<?php
$product_id = $_GET['artwork_id'];
echo $product_id;
$query = "DELETE FROM cart WHERE artwork_id = '$product_id'";
include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$db_result = $connection->conn->query($query);  
header("Location: ../cart.php");
?>