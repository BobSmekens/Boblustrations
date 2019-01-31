<?php
session_start();
$artwork_id = $_GET['artwork_id'];
$artwork_price = $_GET['artwork_price'];
$client_id = $_SESSION['user_id'];

echo $artwork_id . $artwork_price . $client_id;
$query = 
"INSERT INTO cart(cart_id, artwork_id, artwork_price, client_id)
VALUES (NULL, $artwork_id, $artwork_price, $client_id)";
include "db_connection.php";

$conn->query($query);  


$conn = null;
header ('Location: ../artwork.php')
?>