<?php
ob_start();
session_start();

$artwork_id = $_GET['artwork_id'];
$artwork_price = $_GET['artwork_price'];

echo $artwork_id;
if(isset($_SESSION['user_id'])) {
    $client_id = $_SESSION['user_id'];
} else {
    $client_id = 1;
};

$query = 
"INSERT INTO cart(cart_id, artwork_id, artwork_price, client_id)
VALUES (NULL, $artwork_id, $artwork_price, $client_id)";

include "db_connection.php";

$conn->query($query);
$conn = null;

header('location: ../artwork.php')
?>




