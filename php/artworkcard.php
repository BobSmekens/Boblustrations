<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artists</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|ZCOOL+XiaoWei" rel="stylesheet">
</head>
<body>

<?php
$query = 
"SELECT artwork.artwork_name, artwork.artwork_url, artwork.artwork_price, artwork.artwork_hot, artwork.artist_id, artists.artist_name, artists.artist_id
FROM artwork
INNER JOIN artists ON artists.artist_id = artwork.artist_id";

include "db_connection.php";
$db_result = $conn->query($query);  
    foreach ($db_result as $row)
    {            
    echo    '<div class="hot-art-card">
                <img class="hot-art-img" src="img/' .
                $row['artwork_url'] . '" alt="">
                <div class="hot-art-text">
                    <div class="hot-art-artist">' . $row['artist_name']. '</div>
                    <div class="hot-art-artwork">' . $row['artwork_name']. '</div>
                    <div class="hot-art-price">$'. $row['artwork_price'] . '</div>
                </div>
            </div>';
    }
    $conn = null;
    ?>


</body>
</html>