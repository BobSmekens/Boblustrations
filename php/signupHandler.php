<?php

$client_name = $_GET['client_name'];
$client_email = $_GET['client_email'];
$client_password = $_GET['client_password'];

echo $client_name . '<br>' . $client_email . '<br>' . $client_password;

include "db_connection.php";

$qry = "INSERT INTO clients (client_name, client_email, client_password)
VALUES ('$client_name', '$client_email', '$client_password')";

$conn->query($qry);

$conn = null;

header('Location: ../signup.php');

?>