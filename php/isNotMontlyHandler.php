<?php 
$artist_name = $_GET['artist_name'];

$query = "UPDATE artists1
SET artist_monthly = 0
WHERE artist_name = '$artist_name'";

include "db_connection.php";
$conn->query($query);    

echo $artist_name . ' is no longer monthly artist';
$conn = null;
?>