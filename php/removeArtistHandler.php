<?php
$artist_name = $_GET['artist_name'];

$query = "DELETE FROM artists1
            WHERE artist_name = '$artist_name'";

include "db_connection.php";
$conn->query($query);  

echo $artist_name . ' deleted';

?>