<?php
session_start();
$user_id = $_SESSION['user_id'];
$query = "DELETE FROM cart WHERE client_id = $user_id";

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$connection->conn->query($query);  
$conn = null;
header("location: ../cart.php");

?>