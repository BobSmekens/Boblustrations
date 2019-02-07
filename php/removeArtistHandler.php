<?php
$artist_name = $_GET['artist_name'];

$query = "DELETE FROM artists1
            WHERE artist_name = '$artist_name'";

include "oopattempt.php";
$connection = new Connection("localhost", "root", "", "boblustrations");
$connection->init_conn();

$db_result = $connection->conn->query($query);    

echo $artist_name . ' deleted';
$conn = null;
?>