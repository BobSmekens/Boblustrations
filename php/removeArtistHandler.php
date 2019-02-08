<?php
$artist_name = $_GET['artist_name'];

$query = "DELETE FROM artists1
            WHERE artist_name = '$artist_name'";

$servername = "rdbms.strato.de";
$username = "U3664325";
$password = "banaan123!";
$database = "DB3664325";
include "oopattempt.php";
$connection = new Connection("$servername", "$username", "$password", "$database");
$connection->init_conn();

$db_result = $connection->conn->query($query);    

echo $artist_name . ' deleted';
$conn = null;
?>