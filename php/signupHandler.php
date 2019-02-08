<?php

$client_name = $_GET['client_name'];
$client_email = $_GET['client_email'];
$client_password = $_GET['client_password'];

$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";
include "oopattempt.php";
$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();
$qry = "INSERT INTO clients (client_name, client_email, client_password, client_type)
VALUES ('$client_name', '$client_email', '$client_password', 'User')";

$connection->conn->query($qry); 

$conn = null;

header('Location: ../signup.php');

?>