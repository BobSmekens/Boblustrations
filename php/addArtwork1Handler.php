<?php
$name = $_GET['name'];
$bio = $_GET['artist_id'];
$style = $_GET['style'];
$monthly = $_GET['hot'];
$url = $_GET['url'];
$type = $_GET['type'];
$price = $_GET['price'];
echo "('$name', '$bio', '$style', $monthly, '$url', '$type')";

$query = 
"INSERT INTO artwork1 (artwork_id, artwork_name, artwork_artist, artwork_url, artwork_price, artwork_hot, artwork_style, artwork_type)
VALUES(null, '$name', '$bio', '$url', '$price','$monthly', '$style',  '$type')";

include "db_connection.php";

$conn->query($query);

$conn = null;

header('Location: adminPage.php');



?>