<?php

$user_email = $_GET['newsletter_email'];
$query = "INSERT INTO newsletter(newsletter_email) 
VALUES ('$user_email')";
echo "<script type='text/javascript'>alert('Signup completed');</script>";

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$connection->conn->query($query);  

$conn = null;

header('Location: ../index.php');


?>