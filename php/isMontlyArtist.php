<?php 
$artist_name = $_GET['artist_name'];

$query = "UPDATE artists1
SET artist_monthly = 1
WHERE artist_name = '$artist_name'";

include "db_connection.php";
$db_result = $conn->query($query);  


echo $artist_name . ' is monthly artist';
$conn = null;
?>