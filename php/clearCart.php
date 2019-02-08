<?php
session_start();
$user_id = $_SESSION['user_id'];
$query = "DELETE FROM cart WHERE client_id = $user_id";

$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";
$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();

$connection->conn->query($query);  
$conn = null;
header("location: ../cart.php");

?>