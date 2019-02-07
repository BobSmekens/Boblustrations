<?php

$client_name = $_GET['client_name'];
$client_email = $_GET['client_email'];
$client_password = $_GET['client_password'];

echo $client_name . '<br>' . $client_email . '<br>' . $client_password;

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn(); 

$qry = "INSERT INTO clients (client_name, client_email, client_password, client_type)
VALUES ('$client_name', '$client_email', '$client_password', 'User')";

$connection->conn->query($qry); 

$conn = null;

header('Location: ../signup.php');

?>