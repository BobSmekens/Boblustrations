<?php

$user_email = $_GET['newsletter_email'];
$query = "INSERT INTO newsletter(newsletter_email) 
VALUES ('$user_email')";
echo "<script type='text/javascript'>alert('Signup completed');</script>";

$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";
include "oopattempt.php";
$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();

$connection->conn->query($query);  

$conn = null;

header('Location: ../index.php');


?>