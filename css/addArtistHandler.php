<?php
$name = $_GET['name'];
$bio = $_GET['artist_bio'];
$style = $_GET['style'];
$monthly = $_GET['monthly'];
$url = $_GET['url'];
$type = $_GET['type'];

$query = 
"INSERT INTO artists (artist_id, artist_name, artist_description, artist_Style, artist_ monthly, artist_url, artist_type)
VALUES('$name', '$bio', '$style', '$monthly', '$url', '$type')";

include "db_connection.php";

$conn->query($qry);

$conn = null;

header('Location: adminPage.php');



?>