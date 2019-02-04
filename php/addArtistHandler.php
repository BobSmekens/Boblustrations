<?php
$name = $_GET['name'];
$bio = $_GET['artist_bio'];
$style = $_GET['style'];
$monthly = $_GET['monthly'];
$url = $_GET['url'];
$type = $_GET['type'];

echo "('$name', '$bio', '$style', $monthly, '$url', '$type')";

$query = 
"INSERT INTO artists1 (artists1.artist_id, artist_name, artist_description, artist_style, artist_monthly, artist_url, artist_type)
VALUES(null, '$name', '$bio', '$style', '$monthly', '$url', '$type')";

include "db_connection.php";

$conn->query($query);

$conn = null;

header('Location: adminPage.php');



?>